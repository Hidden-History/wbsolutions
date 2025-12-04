<!-- Chatbot Widget -->
<div id="chatbot-widget">
  <!-- Chat Window -->
  <div id="chatbot-window" class="chatbot-window">
    <!-- Header -->
    <div class="chatbot-header">
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 bg-gold-gradient rounded-full flex items-center justify-center">
          <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
          </svg>
        </div>
        <div>
          <div class="text-light-gray font-semibold">WB Solutions</div>
          <span class="badge badge-success text-xs">Online</span>
        </div>
      </div>
      <button id="chatbot-close" class="text-light-gray hover:text-gold transition-colors" aria-label="Close chat">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <!-- Messages -->
    <div id="chatbot-messages" class="chatbot-messages">
      <!-- Welcome message -->
      <div class="chatbot-message bot">
        <p>Hi! I'm here to help. What can I assist you with today?</p>
        <span class="text-xs opacity-60 mt-1 block"></span>
      </div>
    </div>

    <!-- Typing Indicator (hidden by default) -->
    <div id="chatbot-typing" class="chatbot-typing hidden">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <!-- Input -->
    <div class="chatbot-input">
      <form id="chatbot-form" class="flex gap-2 w-full">
        <input
          type="text"
          id="chatbot-input-field"
          name="chatInput"
          placeholder="Type your message..."
          class="input flex-1"
          autocomplete="off"
        >
        <button type="submit" class="btn btn-primary px-6">Send</button>
      </form>
    </div>
  </div>

  <!-- Trigger Button -->
  <button id="chatbot-toggle" class="chatbot-button" aria-label="Open chat">
    <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
    </svg>
    <!-- Pulse effect -->
    <span class="absolute w-full h-full rounded-full bg-gold/30 animate-ping"></span>
  </button>
</div>
