<?php
$pageTitle = 'AI Chat Agents & Chatbots';
$pageDescription = 'Intelligent AI chatbots powered by n8n and Claude. Provide 24/7 customer support, automate responses, and enhance user engagement.';
include '../includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative min-h-[50vh] flex items-center justify-center px-4 py-20 overflow-hidden">
      <div class="max-w-4xl mx-auto text-center relative z-10">
        <div class="text-6xl mb-6">🤖</div>
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
          <span class="text-gold-gradient">AI Chat Agents</span>
          <br>
          <span class="text-light-gray">24/7 Customer Support</span>
        </h1>
        <p class="text-xl text-medium-gray max-w-2xl mx-auto mb-8">
          Intelligent chatbots that provide instant customer support, answer questions, and qualify leads automatically using cutting-edge AI technology.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="/contact.php" class="btn btn-primary text-lg px-8 py-4 glow-gold">Get Started - $300</a>
          <a href="#demo" class="btn btn-outline text-lg px-8 py-4">Try Demo Below</a>
        </div>
      </div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black pointer-events-none"></div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-4xl mx-auto text-center">
        <span class="badge badge-gold mb-6 inline-block">Add-On Service</span>
        <h2 class="text-4xl md:text-5xl font-bold mb-8">
          <span class="text-gold-gradient">$300-800</span>
        </h2>
        <p class="text-xl text-medium-gray mb-12">
          One-time setup fee. Optional monthly hosting ($20-50/month).
        </p>

        <div class="glass-strong p-8 md:p-12 rounded-lg text-left max-w-2xl mx-auto">
          <h3 class="text-2xl font-bold text-gold mb-6">What's Included:</h3>
          <ul class="space-y-4">
            <?php
            $features = [
              'Custom AI training on your business data',
              '24/7 automated customer support',
              'Natural language understanding',
              'Integration with your website',
              'Chat history and analytics',
              'Lead qualification and routing',
              'Multi-language support',
              'Custom branding and styling',
              '30 days of support and adjustments',
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
            <span class="text-gold-gradient">Why AI Chat Agents?</span>
          </h2>
          <p class="text-xl text-medium-gray max-w-2xl mx-auto">
            Provide instant support and never miss a lead, even while you sleep
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="glass-strong p-6 rounded-lg hover-lift text-center">
            <div class="text-5xl mb-4">⏰</div>
            <h3 class="text-xl font-bold text-gold mb-3">24/7 Availability</h3>
            <p class="text-medium-gray">Your chatbot never sleeps. Always available to help customers instantly.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift text-center">
            <div class="text-5xl mb-4">💬</div>
            <h3 class="text-xl font-bold text-gold mb-3">Instant Responses</h3>
            <p class="text-medium-gray">Answer customer questions in seconds, not hours. Improve satisfaction.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift text-center">
            <div class="text-5xl mb-4">💰</div>
            <h3 class="text-xl font-bold text-gold mb-3">Cost Savings</h3>
            <p class="text-medium-gray">Handle 80-90% of common questions automatically. Save on support staff.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift text-center">
            <div class="text-5xl mb-4">📊</div>
            <h3 class="text-xl font-bold text-gold mb-3">Lead Qualification</h3>
            <p class="text-medium-gray">Automatically collect contact info, qualify leads, and route to sales.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift text-center">
            <div class="text-5xl mb-4">🌍</div>
            <h3 class="text-xl font-bold text-gold mb-3">Multi-Language</h3>
            <p class="text-medium-gray">Communicate with customers in their preferred language.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift text-center">
            <div class="text-5xl mb-4">📈</div>
            <h3 class="text-xl font-bold text-gold mb-3">Analytics & Insights</h3>
            <p class="text-medium-gray">Track conversations and identify common questions.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Live Demo Section -->
    <section id="demo" class="py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-4xl mx-auto text-center">
        <span class="badge badge-gold mb-6 inline-block">Try It Now</span>
        <h2 class="text-4xl md:text-5xl font-bold mb-4">
          <span class="text-gold-gradient">Experience AI Chat</span>
        </h2>
        <p class="text-xl text-medium-gray mb-12">
          Click the chat widget in the bottom right to see our AI in action!
        </p>

        <div class="glass-strong p-8 rounded-lg">
          <p class="text-light-gray text-lg mb-4">
            👉 Our chatbot is live on this website. Try asking:
          </p>
          <ul class="space-y-2 text-medium-gray max-w-md mx-auto">
            <li>"What services do you offer?"</li>
            <li>"How much does a website cost?"</li>
            <li>"Can you help with AI integration?"</li>
            <li>"What's your turnaround time?"</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
          <span class="text-gold-gradient">Ready to Automate Support?</span>
        </h2>
        <p class="text-xl text-medium-gray mb-8">
          Let's build an AI chat agent for your business
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="/contact.php" class="btn btn-primary text-lg px-8 py-4 glow-gold">Get Your Chat Agent</a>
          <a href="/services.php" class="btn btn-outline text-lg px-8 py-4">View All Services</a>
        </div>
      </div>
    </section>

<?php include '../includes/footer.php'; ?>
