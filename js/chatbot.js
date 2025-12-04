/**
 * WB Solutions - Chatbot Widget
 * Handles chatbot UI, messaging, and n8n webhook integration
 */

(function() {
  'use strict';

  // Configuration
  const CHATBOT_URL = 'http://localhost:5678/webhook/a8f3710e-3512-43e9-af02-81d0e75ba26c/chat';

  // State
  let sessionId = `session-${Date.now()}`;
  let isOpen = false;

  // DOM Elements
  let toggleBtn, chatWindow, closeBtn, messagesContainer, inputForm, inputField, typingIndicator;

  /**
   * Initialize DOM References
   */
  function initElements() {
    toggleBtn = document.getElementById('chatbot-toggle');
    chatWindow = document.getElementById('chatbot-window');
    closeBtn = document.getElementById('chatbot-close');
    messagesContainer = document.getElementById('chatbot-messages');
    inputForm = document.getElementById('chatbot-form');
    inputField = document.getElementById('chatbot-input-field');
    typingIndicator = document.getElementById('chatbot-typing');
  }

  /**
   * Toggle Chat Window
   */
  function toggleChat() {
    isOpen = !isOpen;

    if (isOpen) {
      chatWindow.classList.add('open');
      toggleBtn.classList.add('hidden');
      inputField.focus();
    } else {
      chatWindow.classList.remove('open');
      toggleBtn.classList.remove('hidden');
    }
  }

  /**
   * Close Chat Window
   */
  function closeChat() {
    isOpen = false;
    chatWindow.classList.remove('open');
    toggleBtn.classList.remove('hidden');
  }

  /**
   * Format Time
   */
  function formatTime(date) {
    return date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
  }

  /**
   * Add Message to Chat
   */
  function addMessage(content, role = 'bot') {
    const messageDiv = document.createElement('div');
    messageDiv.className = `chatbot-message ${role}`;
    messageDiv.innerHTML = `
      <p>${escapeHtml(content)}</p>
      <span class="text-xs opacity-60 mt-1 block">${formatTime(new Date())}</span>
    `;

    messagesContainer.appendChild(messageDiv);
    scrollToBottom();
  }

  /**
   * Escape HTML to prevent XSS
   */
  function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
  }

  /**
   * Scroll Messages to Bottom
   */
  function scrollToBottom() {
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
  }

  /**
   * Show Typing Indicator
   */
  function showTyping() {
    typingIndicator.classList.remove('hidden');
    scrollToBottom();
  }

  /**
   * Hide Typing Indicator
   */
  function hideTyping() {
    typingIndicator.classList.add('hidden');
  }

  /**
   * Send Message to n8n Webhook with Retry
   */
  async function sendMessage(message) {
    const maxRetries = 2;
    const initialDelay = 500;

    for (let attempt = 0; attempt < maxRetries; attempt++) {
      try {
        const response = await fetch(CHATBOT_URL, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            message: message,
            sessionId: sessionId,
          }),
        });

        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }

        const data = await response.json();
        return data.output || data.message || data.response || data.text || "I'm here to help! How can I assist you today?";

      } catch (error) {
        if (attempt === maxRetries - 1) {
          throw error;
        }

        // Wait before retry
        await new Promise(resolve => setTimeout(resolve, initialDelay * Math.pow(2, attempt)));
      }
    }
  }

  /**
   * Handle Form Submit
   */
  async function handleSubmit(e) {
    e.preventDefault();

    const message = inputField.value.trim();
    if (!message) return;

    // Add user message
    addMessage(message, 'user');
    inputField.value = '';

    // Show typing indicator
    showTyping();

    try {
      // Send to webhook
      const response = await sendMessage(message);

      // Hide typing and add bot response
      hideTyping();
      addMessage(response, 'bot');

    } catch (error) {
      console.error('Chatbot error:', error);
      hideTyping();
      addMessage("I'm having trouble connecting right now. Please try again in a moment or contact us directly at hello@wbsolutions.ca", 'bot');
    }
  }

  /**
   * Handle Keyboard Events
   */
  function handleKeydown(e) {
    if (e.key === 'Escape' && isOpen) {
      closeChat();
    }
  }

  /**
   * Initialize Chatbot
   */
  function init() {
    initElements();

    if (!toggleBtn || !chatWindow) {
      console.warn('Chatbot elements not found');
      return;
    }

    // Event listeners
    toggleBtn.addEventListener('click', toggleChat);
    closeBtn.addEventListener('click', closeChat);
    inputForm.addEventListener('submit', handleSubmit);
    document.addEventListener('keydown', handleKeydown);

    // Update timestamp on welcome message
    const welcomeTime = messagesContainer.querySelector('.chatbot-message.bot span');
    if (welcomeTime) {
      welcomeTime.textContent = formatTime(new Date());
    }
  }

  // Initialize when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  // Export for global access
  window.WBChatbot = {
    toggle: toggleChat,
    close: closeChat,
    addMessage,
  };
})();
