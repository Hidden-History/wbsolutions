  </main>

  <!-- Footer -->
  <footer class="glass mt-20 border-t border-gold/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <!-- Footer Grid - 4 Columns on Desktop -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
        <!-- Services -->
        <div>
          <h3 class="text-gold font-semibold mb-4">Services</h3>
          <ul class="space-y-2">
            <li><a href="/services/static-websites.php" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">Static Websites</a></li>
            <li><a href="/services/ai-chat-agents.php" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">AI Chat Agents</a></li>
            <li><a href="/services/business-automation.php" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">Business Automation</a></li>
            <li><a href="/services/custom-branding.php" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">Custom Branding</a></li>
          </ul>
        </div>

        <!-- Company -->
        <div>
          <h3 class="text-gold font-semibold mb-4">Company</h3>
          <ul class="space-y-2">
            <li><a href="/about.php" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">About Us</a></li>
            <li><a href="/portfolio.php" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">Portfolio</a></li>
            <li><a href="/contact.php" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">Contact</a></li>
          </ul>
        </div>

        <!-- Resources -->
        <div>
          <h3 class="text-gold font-semibold mb-4">Resources</h3>
          <ul class="space-y-2">
            <li><a href="/portfolio.php" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">Case Studies</a></li>
            <li><a href="/#faq" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">FAQ</a></li>
          </ul>
        </div>

        <!-- Connect -->
        <div>
          <h3 class="text-gold font-semibold mb-4">Connect</h3>
          <ul class="space-y-2">
            <li><a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">LinkedIn <span class="sr-only">(opens in new window)</span></a></li>
            <li><a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">Twitter <span class="sr-only">(opens in new window)</span></a></li>
            <li><a href="https://github.com" target="_blank" rel="noopener noreferrer" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">GitHub <span class="sr-only">(opens in new window)</span></a></li>
            <li><a href="mailto:hello@wbsolutions.ca" class="text-light-gray hover:text-gold transition-colors duration-200 text-sm">Email Us</a></li>
          </ul>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="border-t border-gold/20 pt-8 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
        <div class="flex items-center space-x-3">
          <a href="/">
            <img src="/assets/logo.png" alt="WB Solutions" class="h-8 w-auto">
          </a>
          <span class="text-medium-gray text-sm">
            &copy; <?php echo date('Y'); ?> WB Solutions. All rights reserved.
          </span>
        </div>

        <div class="flex space-x-6 text-sm text-medium-gray">
          <a href="/privacy-policy.php" class="hover:text-gold transition-colors duration-200">Privacy Policy</a>
          <a href="/terms-of-service.php" class="hover:text-gold transition-colors duration-200">Terms of Service</a>
          <a href="/accessibility.php" class="hover:text-gold transition-colors duration-200">Accessibility</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Toast Container -->
  <div id="toast-container" class="toast-container"></div>

  <!-- Chatbot Widget -->
  <?php include __DIR__ . '/chatbot.php'; ?>

  <!-- Scripts -->
  <script src="/js/main.js"></script>
  <script src="/js/forms.js"></script>
  <script src="/js/chatbot.js"></script>
  <script src="/js/calculator.js"></script>
</body>
</html>
