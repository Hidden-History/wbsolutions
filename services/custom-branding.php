<?php
$pageTitle = 'Custom Branding';
$pageDescription = 'Professional branding services including logo design, brand identity, and visual guidelines. Create a memorable brand that stands out.';
include '../includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative min-h-[50vh] flex items-center justify-center px-4 py-20 overflow-hidden">
      <div class="max-w-4xl mx-auto text-center relative z-10">
        <div class="text-6xl mb-6">🎨</div>
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
          <span class="text-gold-gradient">Custom Branding</span>
          <br>
          <span class="text-light-gray">Stand Out from the Crowd</span>
        </h1>
        <p class="text-xl text-medium-gray max-w-2xl mx-auto mb-8">
          Professional branding services that create a memorable identity for your business. From logos to complete brand guidelines.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="/contact.php" class="btn btn-primary text-lg px-8 py-4 glow-gold">Get Started - $200</a>
          <a href="/portfolio.php" class="btn btn-outline text-lg px-8 py-4">View Portfolio</a>
        </div>
      </div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black pointer-events-none"></div>
    </section>

    <!-- Services Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">Branding Services</span>
          </h2>
          <p class="text-xl text-medium-gray max-w-2xl mx-auto">
            Everything you need to build a strong brand identity
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="text-4xl mb-4">✏️</div>
            <h3 class="text-xl font-bold text-gold mb-3">Logo Design</h3>
            <p class="text-medium-gray mb-4">Custom logo design with multiple concepts and revisions.</p>
            <div class="text-gold font-bold">$200-$500</div>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="text-4xl mb-4">🎨</div>
            <h3 class="text-xl font-bold text-gold mb-3">Color Palette</h3>
            <p class="text-medium-gray mb-4">Strategic color selection that reflects your brand personality.</p>
            <div class="text-gold font-bold">Included with Logo</div>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="text-4xl mb-4">📝</div>
            <h3 class="text-xl font-bold text-gold mb-3">Typography</h3>
            <p class="text-medium-gray mb-4">Font pairing and hierarchy guidelines for consistent messaging.</p>
            <div class="text-gold font-bold">Included with Logo</div>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="text-4xl mb-4">📄</div>
            <h3 class="text-xl font-bold text-gold mb-3">Brand Guidelines</h3>
            <p class="text-medium-gray mb-4">Complete guide for using your brand consistently.</p>
            <div class="text-gold font-bold">$300-$500</div>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="text-4xl mb-4">💼</div>
            <h3 class="text-xl font-bold text-gold mb-3">Business Cards</h3>
            <p class="text-medium-gray mb-4">Professional business card design that makes an impression.</p>
            <div class="text-gold font-bold">$100-$200</div>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="text-4xl mb-4">📱</div>
            <h3 class="text-xl font-bold text-gold mb-3">Social Media Kit</h3>
            <p class="text-medium-gray mb-4">Branded templates for all your social platforms.</p>
            <div class="text-gold font-bold">$200-$400</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">Our Process</span>
          </h2>
          <p class="text-xl text-medium-gray">
            From concept to completion in 1-2 weeks
          </p>
        </div>

        <div class="space-y-6">
          <div class="glass-strong p-6 rounded-lg hover-lift flex items-start gap-6">
            <div class="w-12 h-12 bg-gold-gradient rounded-full flex items-center justify-center flex-shrink-0">
              <span class="text-xl font-bold text-black">1</span>
            </div>
            <div>
              <h3 class="text-xl font-bold text-gold mb-2">Discovery</h3>
              <p class="text-medium-gray">We learn about your business, audience, and vision.</p>
            </div>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift flex items-start gap-6">
            <div class="w-12 h-12 bg-gold-gradient rounded-full flex items-center justify-center flex-shrink-0">
              <span class="text-xl font-bold text-black">2</span>
            </div>
            <div>
              <h3 class="text-xl font-bold text-gold mb-2">Concepts</h3>
              <p class="text-medium-gray">We create 3-5 initial concepts for your review.</p>
            </div>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift flex items-start gap-6">
            <div class="w-12 h-12 bg-gold-gradient rounded-full flex items-center justify-center flex-shrink-0">
              <span class="text-xl font-bold text-black">3</span>
            </div>
            <div>
              <h3 class="text-xl font-bold text-gold mb-2">Refinement</h3>
              <p class="text-medium-gray">We refine your chosen concept with your feedback.</p>
            </div>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift flex items-start gap-6">
            <div class="w-12 h-12 bg-gold-gradient rounded-full flex items-center justify-center flex-shrink-0">
              <span class="text-xl font-bold text-black">4</span>
            </div>
            <div>
              <h3 class="text-xl font-bold text-gold mb-2">Delivery</h3>
              <p class="text-medium-gray">You receive all files in multiple formats for any use.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
          <span class="text-gold-gradient">Ready for a New Look?</span>
        </h2>
        <p class="text-xl text-medium-gray mb-8">
          Let's create a brand that represents your business perfectly
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="/contact.php" class="btn btn-primary text-lg px-8 py-4 glow-gold">Start Your Branding</a>
          <a href="/services.php" class="btn btn-outline text-lg px-8 py-4">View All Services</a>
        </div>
      </div>
    </section>

<?php include '../includes/footer.php'; ?>
