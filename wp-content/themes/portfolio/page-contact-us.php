<?php get_header(); ?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Get In Touch</h1>
            <p>Let's discuss your photography needs and create something beautiful together</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Contact Information</h2>
                    <p>Ready to book your session or have questions about my services? I'd love to hear from you!</p>

                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Phone</h3>
                            <p>(555) 123-4567</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>hello@alexparkerphoto.com</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Location</h3>
                            <p>Chicago, IL & Surrounding Areas</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Response Time</h3>
                            <p>Within 24 hours</p>
                        </div>
                    </div>

                    <div class="social-contact">
                        <h3>Follow My Work</h3>
                        <div class="social-links">
                            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-container">
                    <form class="contact-form" id="contact-form">
                        <h2>Send Me a Message</h2>

                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="service">Service Interested In</label>
                            <select id="service" name="service">
                                <option value="">Please select a service</option>
                                <option value="wedding">Wedding Photography</option>
                                <option value="portrait">Portrait Photography</option>
                                <option value="event">Event Photography</option>
                                <option value="commercial">Commercial Photography</option>
                                <option value="fashion">Fashion Photography</option>
                                <option value="fine-art">Fine Art Photography</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="date">Preferred Date</label>
                            <input type="date" id="date" name="date">
                        </div>

                        <div class="form-group">
                            <label for="budget">Budget Range</label>
                            <select id="budget" name="budget">
                                <option value="">Please select your budget</option>
                                <option value="under-500">Under $500</option>
                                <option value="500-1000">$500 - $1,000</option>
                                <option value="1000-2500">$1,000 - $2,500</option>
                                <option value="2500-5000">$2,500 - $5,000</option>
                                <option value="over-5000">Over $5,000</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Tell me about your project *</label>
                            <textarea id="message" name="message" rows="5" placeholder="Please describe your photography needs, vision, and any specific requirements..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>How far in advance should I book?</h3>
                    <p>For weddings, I recommend booking 6-12 months in advance. For other sessions, 2-4 weeks is usually sufficient, though I can often accommodate shorter notice.</p>
                </div>
                <div class="faq-item">
                    <h3>What's included in the session fee?</h3>
                    <p>All sessions include professional photography, expert editing, high-resolution digital images, and an online gallery for easy sharing with family and friends.</p>
                </div>
                <div class="faq-item">
                    <h3>Do you provide prints?</h3>
                    <p>Yes! I offer professional printing services with various sizes and materials. All packages include print release for personal use.</p>
                </div>
                <div class="faq-item">
                    <h3>What happens if it rains?</h3>
                    <p>For outdoor sessions, we'll monitor weather closely and have backup indoor locations ready. We can also reschedule if needed.</p>
                </div>
                <div class="faq-item">
                    <h3>How long until I receive my photos?</h3>
                    <p>Standard turnaround is 2-3 weeks for edited images. Rush delivery is available for an additional fee.</p>
                </div>
                <div class="faq-item">
                    <h3>Do you travel for sessions?</h3>
                    <p>Absolutely! I travel throughout the Chicago area and beyond. Travel fees may apply for locations over 50 miles from Chicago.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>