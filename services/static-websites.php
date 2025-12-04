<?php
$pageTitle = 'Static Website Development';
$pageDescription = 'Lightning-fast, secure, and cost-effective static websites for small businesses. No monthly fees, 99.9% uptime, and blazing-fast performance.';
include '../includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative min-h-[50vh] flex items-center justify-center px-4 py-20 overflow-hidden">
      <div class="max-w-4xl mx-auto text-center relative z-10">
        <div class="text-6xl mb-6">🚀</div>
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
          <span class="text-gold-gradient">Static Website</span>
          <br>
          <span class="text-light-gray">Development</span>
        </h1>
        <p class="text-xl text-medium-gray max-w-2xl mx-auto mb-8">
          Fast, secure, and maintenance-free websites that just work. Perfect for businesses that want a professional online presence without the ongoing hassle and costs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="/contact.php" class="btn btn-primary text-lg px-8 py-4 glow-gold">Get Started - $500</a>
          <a href="/portfolio.php" class="btn btn-outline text-lg px-8 py-4">View Examples</a>
        </div>
      </div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black pointer-events-none"></div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-4xl mx-auto text-center">
        <span class="badge badge-gold mb-6 inline-block">Transparent Pricing</span>
        <h2 class="text-4xl md:text-5xl font-bold mb-8">
          <span class="text-gold-gradient">Starting at $500-750</span>
        </h2>
        <p class="text-xl text-medium-gray mb-12">
          One-time fee. No monthly maintenance costs. No hidden fees.
        </p>

        <div class="glass-strong p-8 md:p-12 rounded-lg text-left max-w-2xl mx-auto">
          <h3 class="text-2xl font-bold text-gold mb-6">What's Included:</h3>
          <ul class="space-y-4">
            <?php
            $features = [
              'Up to 5 professional pages',
              '100% mobile-responsive design',
              'Custom design matching your brand',
              'Contact form integration',
              'Basic SEO optimization',
              'SSL certificate (HTTPS)',
              'Fast hosting setup',
              '30 days of support',
              'Zero maintenance required',
              'Lightning-fast load times',
            ];
            foreach ($features as $feature): ?>
            <li class="flex items-start gap-3 text-light-gray">
              <svg class="w-6 h-6 text-gold flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <?php echo $feature; ?>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 px-4">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">Why Static Websites?</span>
          </h2>
          <p class="text-xl text-medium-gray max-w-2xl mx-auto">
            Modern technology that delivers better results at a fraction of the cost
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="glass-strong p-6 rounded-lg hover-lift text-center">
            <div class="text-5xl mb-4">⚡</div>
            <h3 class="text-xl font-bold text-gold mb-3">Lightning Fast</h3>
            <p class="text-medium-gray">Load in under 1 second. Static sites are 10x faster than traditional WordPress sites.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift text-center">
            <div class="text-5xl mb-4">🔒</div>
            <h3 class="text-xl font-bold text-gold mb-3">Ultra Secure</h3>
            <p class="text-medium-gray">No databases to hack, no plugins to exploit. Virtually immune to common web attacks.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift text-center">
            <div class="text-5xl mb-4">💰</div>
            <h3 class="text-xl font-bold text-gold mb-3">Cost Effective</h3>
            <p class="text-medium-gray">One-time fee of $500-750. No monthly maintenance, no plugin licenses.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift text-center">
            <div class="text-5xl mb-4">🚀</div>
            <h3 class="text-xl font-bold text-gold mb-3">SEO Optimized</h3>
            <p class="text-medium-gray">Fast load times, clean code, and mobile-first design give you a major SEO advantage.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift text-center">
            <div class="text-5xl mb-4">📱</div>
            <h3 class="text-xl font-bold text-gold mb-3">Mobile Perfect</h3>
            <p class="text-medium-gray">Flawless experience on every device. Responsive design that looks great everywhere.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift text-center">
            <div class="text-5xl mb-4">🎯</div>
            <h3 class="text-xl font-bold text-gold mb-3">Zero Maintenance</h3>
            <p class="text-medium-gray">Set it and forget it. No updates, no patches, no monthly tasks.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Comparison Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">Static vs Traditional</span>
          </h2>
          <p class="text-xl text-medium-gray">
            See how static websites stack up against WordPress and other CMS platforms
          </p>
        </div>

        <div class="glass-strong rounded-lg overflow-hidden">
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="border-b border-gold/20">
                  <th class="p-4 text-left text-light-gray">Feature</th>
                  <th class="p-4 text-center text-gold font-bold">Static Sites</th>
                  <th class="p-4 text-center text-medium-gray">WordPress/CMS</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b border-gold/10 hover:bg-gold/5">
                  <td class="p-4 text-light-gray">Initial Cost</td>
                  <td class="p-4 text-center text-gold font-semibold">$500-750</td>
                  <td class="p-4 text-center text-medium-gray">$2,000-5,000</td>
                </tr>
                <tr class="border-b border-gold/10 hover:bg-gold/5">
                  <td class="p-4 text-light-gray">Monthly Maintenance</td>
                  <td class="p-4 text-center text-gold font-semibold">$0</td>
                  <td class="p-4 text-center text-medium-gray">$50-200</td>
                </tr>
                <tr class="border-b border-gold/10 hover:bg-gold/5">
                  <td class="p-4 text-light-gray">Page Load Time</td>
                  <td class="p-4 text-center text-gold font-semibold">< 1 second</td>
                  <td class="p-4 text-center text-medium-gray">2-5 seconds</td>
                </tr>
                <tr class="border-b border-gold/10 hover:bg-gold/5">
                  <td class="p-4 text-light-gray">Security Updates</td>
                  <td class="p-4 text-center text-gold font-semibold">None needed</td>
                  <td class="p-4 text-center text-medium-gray">Weekly/Monthly</td>
                </tr>
                <tr class="border-b border-gold/10 hover:bg-gold/5">
                  <td class="p-4 text-light-gray">Hack Risk</td>
                  <td class="p-4 text-center text-gold font-semibold">Very Low</td>
                  <td class="p-4 text-center text-medium-gray">High</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="text-center mt-8">
          <p class="text-xl text-gold font-semibold">
            Save $600-2,400 per year with a static website!
          </p>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
          <span class="text-gold-gradient">Ready to Get Started?</span>
        </h2>
        <p class="text-xl text-medium-gray mb-8">
          Let's build a fast, beautiful website for your business
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="/contact.php" class="btn btn-primary text-lg px-8 py-4 glow-gold">Start Your Project</a>
          <a href="/services.php" class="btn btn-outline text-lg px-8 py-4">View All Services</a>
        </div>
      </div>
    </section>

<?php include '../includes/footer.php'; ?>
