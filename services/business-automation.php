<?php
$pageTitle = 'Business Automation';
$pageDescription = 'Streamline your operations with custom AI-powered automations. Save time, reduce errors, and let you focus on growing your business.';
include '../includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative min-h-[50vh] flex items-center justify-center px-4 py-20 overflow-hidden">
      <div class="max-w-4xl mx-auto text-center relative z-10">
        <div class="text-6xl mb-6">⚙️</div>
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
          <span class="text-gold-gradient">Business Automation</span>
          <br>
          <span class="text-light-gray">AI-Powered Workflows</span>
        </h1>
        <p class="text-xl text-medium-gray max-w-2xl mx-auto mb-8">
          Streamline your operations with custom AI-powered automations that save time, reduce errors, and let you focus on growing your business.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="/contact.php" class="btn btn-primary text-lg px-8 py-4 glow-gold">Get a Quote</a>
          <a href="#examples" class="btn btn-outline text-lg px-8 py-4">See Examples</a>
        </div>
      </div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black pointer-events-none"></div>
    </section>

    <!-- What We Automate Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">What We Automate</span>
          </h2>
          <p class="text-xl text-medium-gray max-w-2xl mx-auto">
            From simple tasks to complex workflows, we can automate it
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="text-4xl mb-4">📧</div>
            <h3 class="text-xl font-bold text-gold mb-3">Email Automation</h3>
            <p class="text-medium-gray">Automated follow-ups, drip campaigns, and personalized responses.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="text-4xl mb-4">📊</div>
            <h3 class="text-xl font-bold text-gold mb-3">Lead Management</h3>
            <p class="text-medium-gray">Capture, qualify, and route leads automatically to your team.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="text-4xl mb-4">📅</div>
            <h3 class="text-xl font-bold text-gold mb-3">Scheduling</h3>
            <p class="text-medium-gray">Automated appointment booking, reminders, and calendar sync.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="text-4xl mb-4">💳</div>
            <h3 class="text-xl font-bold text-gold mb-3">Invoice & Billing</h3>
            <p class="text-medium-gray">Auto-generate invoices, send reminders, and track payments.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="text-4xl mb-4">🔄</div>
            <h3 class="text-xl font-bold text-gold mb-3">Data Sync</h3>
            <p class="text-medium-gray">Keep your CRM, spreadsheets, and apps in sync automatically.</p>
          </div>
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="text-4xl mb-4">📝</div>
            <h3 class="text-xl font-bold text-gold mb-3">Document Generation</h3>
            <p class="text-medium-gray">Auto-create contracts, proposals, and reports from templates.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ROI Section -->
    <section id="examples" class="py-20 px-4">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">Real Results</span>
          </h2>
          <p class="text-xl text-medium-gray">
            See the impact of automation on businesses like yours
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          <div class="glass-strong p-8 rounded-lg text-center hover-lift">
            <div class="text-5xl font-bold text-gold-gradient mb-2">20+</div>
            <div class="text-light-gray mb-4">Hours Saved Weekly</div>
            <p class="text-medium-gray text-sm">Average time saved on manual tasks</p>
          </div>
          <div class="glass-strong p-8 rounded-lg text-center hover-lift">
            <div class="text-5xl font-bold text-gold-gradient mb-2">85%</div>
            <div class="text-light-gray mb-4">Error Reduction</div>
            <p class="text-medium-gray text-sm">Fewer mistakes with automated processes</p>
          </div>
          <div class="glass-strong p-8 rounded-lg text-center hover-lift">
            <div class="text-5xl font-bold text-gold-gradient mb-2">3x</div>
            <div class="text-light-gray mb-4">Faster Response</div>
            <p class="text-medium-gray text-sm">Speed improvement in customer response</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
          <span class="text-gold-gradient">Ready to Automate?</span>
        </h2>
        <p class="text-xl text-medium-gray mb-8">
          Let's discuss how automation can transform your business
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="/contact.php" class="btn btn-primary text-lg px-8 py-4 glow-gold">Get a Free Consultation</a>
          <a href="/services.php" class="btn btn-outline text-lg px-8 py-4">View All Services</a>
        </div>
      </div>
    </section>

<?php include '../includes/footer.php'; ?>
