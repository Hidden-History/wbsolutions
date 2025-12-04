<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'WB Solutions - Professional web development, AI automation, and business solutions for small businesses.'; ?>">
  <meta name="keywords" content="web development, AI automation, business solutions, small business websites, chatbots">
  <meta name="author" content="WB Solutions">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'WB Solutions'; ?>">
  <meta property="og:description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'Professional web development and AI automation solutions.'; ?>">
  <meta property="og:image" content="/assets/og-image.jpg">
  <meta property="og:url" content="https://wbsolutions.ca<?php echo $_SERVER['REQUEST_URI']; ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'WB Solutions'; ?>">
  <meta name="twitter:description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'Professional web development and AI automation solutions.'; ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Canonical URL -->
  <link rel="canonical" href="https://wbsolutions.ca<?php echo strtok($_SERVER['REQUEST_URI'], '?'); ?>">

  <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . ' | WB Solutions' : 'WB Solutions'; ?></title>

  <!-- Styles -->
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <!-- Skip Link for Accessibility -->
  <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-gold focus:text-black focus:rounded">
    Skip to main content
  </a>

  <!-- Glassmorphism Navigation Bar -->
  <header class="fixed top-0 left-0 right-0 z-40 glass-strong">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Main navigation">
      <div class="flex items-center justify-between h-16 md:h-20">

        <!-- Logo - Left -->
        <div class="flex-shrink-0">
          <a href="/" class="flex items-center group hover-lift" aria-label="WB Solutions Home">
            <img src="/assets/logo.png" alt="WB Solutions" class="h-12 md:h-14 w-auto">
          </a>
        </div>

        <!-- Desktop Navigation - Center -->
        <div class="hidden md:flex md:items-center md:space-x-8">
          <?php
          $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
          $navItems = [
            ['label' => 'Home', 'href' => '/'],
            ['label' => 'About', 'href' => '/about.php'],
            ['label' => 'Portfolio', 'href' => '/portfolio.php'],
            ['label' => 'Contact', 'href' => '/contact.php'],
          ];
          foreach ($navItems as $item):
            $isActive = ($currentPath === $item['href']) || ($item['href'] === '/' && $currentPath === '/index.php');
          ?>
          <a href="<?php echo $item['href']; ?>" class="transition-colors duration-200 font-medium <?php echo $isActive ? 'text-gold' : 'text-light-gray hover:text-gold'; ?>">
            <?php echo $item['label']; ?>
          </a>
          <?php endforeach; ?>

          <!-- Services Dropdown -->
          <div class="dropdown relative" id="services-dropdown">
            <button class="transition-colors duration-200 font-medium flex items-center gap-1 <?php echo strpos($currentPath, '/services') === 0 ? 'text-gold' : 'text-light-gray hover:text-gold'; ?>">
              Services
              <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <div class="dropdown-menu">
              <a href="/services.php" class="dropdown-item">All Services</a>
              <a href="/services/static-websites.php" class="dropdown-item">Static Websites</a>
              <a href="/services/ai-chat-agents.php" class="dropdown-item">AI Chat Agents</a>
              <a href="/services/business-automation.php" class="dropdown-item">Business Automation</a>
              <a href="/services/custom-branding.php" class="dropdown-item">Custom Branding</a>
            </div>
          </div>
        </div>

        <!-- CTA Button - Right -->
        <div class="hidden md:flex md:items-center">
          <a href="/contact.php" class="btn btn-primary">
            Get Started
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button type="button" id="mobile-menu-btn" class="text-light-gray hover:text-gold transition-colors p-2" aria-expanded="false" aria-label="Toggle navigation menu">
            <svg class="h-6 w-6 menu-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg class="h-6 w-6 close-icon hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div id="mobile-menu" class="md:hidden border-t border-gold/20 py-4 hidden">
        <div class="flex flex-col space-y-4">
          <?php foreach ($navItems as $item):
            $isActive = ($currentPath === $item['href']) || ($item['href'] === '/' && $currentPath === '/index.php');
          ?>
          <a href="<?php echo $item['href']; ?>" class="transition-colors duration-200 font-medium px-2 <?php echo $isActive ? 'text-gold' : 'text-light-gray hover:text-gold'; ?>">
            <?php echo $item['label']; ?>
          </a>
          <?php endforeach; ?>

          <!-- Mobile Services Dropdown -->
          <div>
            <button id="mobile-services-btn" class="transition-colors duration-200 font-medium px-2 w-full text-left flex items-center justify-between <?php echo strpos($currentPath, '/services') === 0 ? 'text-gold' : 'text-light-gray hover:text-gold'; ?>">
              Services
              <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <div id="mobile-services-menu" class="mt-2 ml-4 space-y-2 hidden">
              <a href="/services.php" class="block px-2 py-2 text-sm text-light-gray hover:text-gold transition-colors duration-200">All Services</a>
              <a href="/services/static-websites.php" class="block px-2 py-2 text-sm text-light-gray hover:text-gold transition-colors duration-200">Static Websites</a>
              <a href="/services/ai-chat-agents.php" class="block px-2 py-2 text-sm text-light-gray hover:text-gold transition-colors duration-200">AI Chat Agents</a>
              <a href="/services/business-automation.php" class="block px-2 py-2 text-sm text-light-gray hover:text-gold transition-colors duration-200">Business Automation</a>
              <a href="/services/custom-branding.php" class="block px-2 py-2 text-sm text-light-gray hover:text-gold transition-colors duration-200">Custom Branding</a>
            </div>
          </div>

          <a href="/contact.php" class="btn btn-primary text-center">
            Get Started
          </a>
        </div>
      </div>
    </nav>
  </header>

  <!-- Main Content (with header offset) -->
  <main id="main-content" class="pt-20">
