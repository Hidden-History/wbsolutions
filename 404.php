<?php
$pageTitle = '404 - Page Not Found';
$pageDescription = "The page you're looking for doesn't exist. Return to WB Solutions homepage or explore our services.";
include 'includes/header.php';
?>

    <div class="pt-20 min-h-screen flex items-center justify-center px-4">
      <div class="max-w-2xl w-full text-center">
        <div class="glass-strong p-8 md:p-12 rounded-lg">
          <!-- 404 Graphic -->
          <div class="mb-8">
            <div class="text-8xl md:text-9xl font-bold text-gold-gradient mb-4">
              404
            </div>
            <div class="w-24 h-1 bg-gold-gradient mx-auto rounded-full"></div>
          </div>

          <!-- Error Message -->
          <h1 class="text-3xl md:text-4xl font-bold mb-4 text-light-gray">
            Page Not Found
          </h1>
          <p class="text-lg text-medium-gray mb-8">
            Oops! The page you're looking for seems to have wandered off into the digital void.
            Don't worry though, we can help you find your way back.
          </p>

          <!-- Navigation Options -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
            <a href="/" class="btn btn-primary flex items-center justify-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Go Home
            </a>

            <a href="/services.php" class="btn btn-outline flex items-center justify-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              View Services
            </a>
          </div>

          <!-- Popular Links -->
          <div class="border-t border-gold/20 pt-6">
            <p class="text-sm text-medium-gray mb-4">Popular Pages:</p>
            <div class="flex flex-wrap justify-center gap-4">
              <a href="/about.php" class="text-gold hover:underline text-sm">About Us</a>
              <a href="/portfolio.php" class="text-gold hover:underline text-sm">Portfolio</a>
              <a href="/contact.php" class="text-gold hover:underline text-sm">Contact</a>
              <a href="/services/static-websites.php" class="text-gold hover:underline text-sm">Static Websites</a>
              <a href="/services/ai-chat-agents.php" class="text-gold hover:underline text-sm">AI Chatbots</a>
            </div>
          </div>

          <!-- Search Suggestion -->
          <div class="mt-8 p-4 bg-gold/5 border border-gold/20 rounded-lg">
            <p class="text-sm text-medium-gray">
              <strong class="text-light-gray">Looking for something specific?</strong>
              <br>
              Try using our <a href="/contact.php" class="text-gold hover:underline">contact form</a> or check our <a href="/services.php" class="text-gold hover:underline">services page</a>.
            </p>
          </div>
        </div>
      </div>
    </div>

<?php include 'includes/footer.php'; ?>
