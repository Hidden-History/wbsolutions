<?php
$pageTitle = 'Accessibility Statement';
$pageDescription = 'WB Solutions Accessibility Statement. Our commitment to making our website accessible to all users, including those with disabilities. WCAG 2.1 AA compliance information.';
include 'includes/header.php';
?>

    <section class="py-20 px-4 pt-28">
      <div class="max-w-4xl mx-auto">
        <span class="badge badge-gold mb-6 inline-block">Commitment</span>
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
          <span class="text-gold-gradient">Accessibility Statement</span>
        </h1>
        <p class="text-light-gray mb-8">Last Updated: <?php echo date('F j, Y'); ?></p>

        <div class="space-y-8 text-light-gray">
          <section>
            <h2 class="text-2xl font-bold text-gold mb-4">Our Commitment</h2>
            <p class="mb-4">
              WB Solutions is committed to ensuring digital accessibility for people with disabilities. We are continually improving the user experience for everyone and applying the relevant accessibility standards to ensure we provide equal access to all of our users.
            </p>
          </section>

          <section>
            <h2 class="text-2xl font-bold text-gold mb-4">Conformance Status</h2>
            <p class="mb-4">
              We strive to conform to the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA standards. These guidelines explain how to make web content more accessible for people with disabilities and user-friendly for everyone.
            </p>
          </section>

          <section>
            <h2 class="text-2xl font-bold text-gold mb-4">Accessibility Features</h2>
            <p class="mb-4">Our website includes the following accessibility features:</p>

            <div class="grid md:grid-cols-2 gap-6 mt-6">
              <div class="glass-strong p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-gold mb-3">Keyboard Navigation</h3>
                <ul class="list-disc list-inside space-y-2 text-sm">
                  <li>Full keyboard navigation support</li>
                  <li>Skip to main content link</li>
                  <li>Logical tab order throughout the site</li>
                  <li>Visible focus indicators</li>
                </ul>
              </div>

              <div class="glass-strong p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-gold mb-3">Screen Reader Support</h3>
                <ul class="list-disc list-inside space-y-2 text-sm">
                  <li>Semantic HTML structure</li>
                  <li>ARIA labels and landmarks</li>
                  <li>Descriptive link text</li>
                  <li>Image alt text</li>
                </ul>
              </div>

              <div class="glass-strong p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-gold mb-3">Visual Design</h3>
                <ul class="list-disc list-inside space-y-2 text-sm">
                  <li>High contrast color schemes</li>
                  <li>Readable font sizes</li>
                  <li>Resizable text (up to 200%)</li>
                  <li>No reliance on color alone for information</li>
                </ul>
              </div>

              <div class="glass-strong p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-gold mb-3">Content Structure</h3>
                <ul class="list-disc list-inside space-y-2 text-sm">
                  <li>Clear heading hierarchy</li>
                  <li>Descriptive page titles</li>
                  <li>Organized navigation menus</li>
                  <li>Consistent layout and design</li>
                </ul>
              </div>
            </div>
          </section>

          <section>
            <h2 class="text-2xl font-bold text-gold mb-4">Assistive Technology Compatibility</h2>
            <p class="mb-4">
              Our website is designed to be compatible with the following assistive technologies:
            </p>
            <ul class="list-disc list-inside space-y-2 ml-4">
              <li>Screen readers (JAWS, NVDA, VoiceOver, TalkBack)</li>
              <li>Screen magnification software</li>
              <li>Speech recognition software</li>
              <li>Keyboard-only navigation</li>
              <li>Alternative input devices</li>
            </ul>
          </section>

          <section>
            <h2 class="text-2xl font-bold text-gold mb-4">Browser and Device Support</h2>
            <p class="mb-4">
              Our website is tested and optimized for:
            </p>
            <ul class="list-disc list-inside space-y-2 ml-4">
              <li>Modern web browsers (Chrome, Firefox, Safari, Edge)</li>
              <li>Mobile devices (iOS and Android)</li>
              <li>Tablets and desktop computers</li>
              <li>Various screen sizes and resolutions</li>
            </ul>
          </section>

          <section>
            <h2 class="text-2xl font-bold text-gold mb-4">Known Limitations</h2>
            <p class="mb-4">
              Despite our best efforts, some limitations may exist:
            </p>
            <ul class="list-disc list-inside space-y-2 ml-4">
              <li>Third-party embedded content may not be fully accessible</li>
              <li>Some PDF documents may require additional accessibility improvements</li>
              <li>Complex interactive elements may have varying levels of support</li>
            </ul>
            <p class="mt-4">
              We are actively working to address these limitations and improve accessibility across all aspects of our website.
            </p>
          </section>

          <section>
            <h2 class="text-2xl font-bold text-gold mb-4">Ongoing Efforts</h2>
            <p class="mb-4">
              We are committed to continuous improvement and regularly:
            </p>
            <ul class="list-disc list-inside space-y-2 ml-4">
              <li>Conduct accessibility audits and testing</li>
              <li>Train our team on accessibility best practices</li>
              <li>Update content and features to improve accessibility</li>
              <li>Respond to user feedback and accessibility concerns</li>
              <li>Stay current with evolving accessibility standards</li>
            </ul>
          </section>

          <section>
            <h2 class="text-2xl font-bold text-gold mb-4">Feedback and Contact</h2>
            <p class="mb-4">
              We welcome your feedback on the accessibility of our website. If you encounter any accessibility barriers or have suggestions for improvement, please let us know:
            </p>
            <div class="glass-strong p-6 rounded-lg mt-4">
              <p class="mb-2"><strong>Email:</strong> <a href="mailto:accessibility@wbsolutions.ca" class="text-gold hover:underline">accessibility@wbsolutions.ca</a></p>
              <p class="mb-2"><strong>Contact Form:</strong> <a href="/contact.php" class="text-gold hover:underline">General Contact Form</a></p>
              <p class="mt-4 text-sm text-medium-gray">
                We aim to respond to accessibility feedback within 2 business days and to propose a solution within 10 business days.
              </p>
            </div>
          </section>

          <section>
            <h2 class="text-2xl font-bold text-gold mb-4">Technical Specifications</h2>
            <p class="mb-4">
              Accessibility of this website relies on the following technologies:
            </p>
            <ul class="list-disc list-inside space-y-2 ml-4">
              <li>HTML5</li>
              <li>CSS3</li>
              <li>JavaScript</li>
              <li>WAI-ARIA (Accessible Rich Internet Applications)</li>
            </ul>
          </section>

          <section>
            <h2 class="text-2xl font-bold text-gold mb-4">Assessment and Testing</h2>
            <p class="mb-4">
              Our accessibility efforts include:
            </p>
            <ul class="list-disc list-inside space-y-2 ml-4">
              <li>Self-evaluation using WCAG guidelines</li>
              <li>Automated accessibility testing tools</li>
              <li>Manual testing with assistive technologies</li>
              <li>User testing with people with disabilities (when possible)</li>
              <li>Regular accessibility reviews during development</li>
            </ul>
          </section>

          <section>
            <h2 class="text-2xl font-bold text-gold mb-4">Formal Complaints</h2>
            <p class="mb-4">
              If you are not satisfied with our response to your accessibility concerns, you may file a formal complaint. We take all accessibility concerns seriously and will investigate all complaints thoroughly.
            </p>
          </section>
        </div>
      </div>
    </section>

<?php include 'includes/footer.php'; ?>
