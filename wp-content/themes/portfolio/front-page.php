<?php get_header();?>
<main>
        <section class="hero">
            <div class="hero-content">
                <h1>Capturing Life's Most Precious Moments</h1>
                <p>Award-winning photographer specializing in portraits, weddings, and fine art photography</p>
                <a href="<?= site_url('/gallery');?>" class="btn btn-primary">View My Work</a>
            </div>
            <div class="hero-image">
                <img src="https://images.pexels.com/photos/1264210/pexels-photo-1264210.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Featured Photography">
            </div>
        </section>

        <section class="featured-work">
            <div class="container">
                <h2 class="section-title">Award-Winning Photography</h2>
                <p class="section-subtitle">Selected works from recent photography contests and exhibitions</p>
                
                <div class="featured-grid">
                    <div class="featured-item" data-category="portrait">
                        <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Portrait Photography - 1st Place Winner">
                        <div class="featured-overlay">
                            <h3>Golden Hour Portrait</h3>
                            <p>1st Place - International Portrait Awards 2024</p>
                        </div>
                    </div>
                    
                    <div class="featured-item" data-category="landscape">
                        <img src="https://images.pexels.com/photos/1366919/pexels-photo-1366919.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Landscape Photography - Award Winner">
                        <div class="featured-overlay">
                            <h3>Mountain Majesty</h3>
                            <p>Best Landscape - Nature Photography Contest 2024</p>
                        </div>
                    </div>
                    
                    <div class="featured-item" data-category="wedding">
                        <img src="https://images.pexels.com/photos/1444442/pexels-photo-1444442.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Wedding Photography - Award Winner">
                        <div class="featured-overlay">
                            <h3>Eternal Moment</h3>
                            <p>People's Choice - Wedding Photography Awards 2024</p>
                        </div>
                    </div>
                    
                    <div class="featured-item" data-category="street">
                        <img src="https://images.pexels.com/photos/1261728/pexels-photo-1261728.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Street Photography - Contest Winner">
                        <div class="featured-overlay">
                            <h3>Urban Stories</h3>
                            <p>2nd Place - Street Photography International 2024</p>
                        </div>
                    </div>
                    
                    <div class="featured-item" data-category="portrait">
                        <img src="https://images.pexels.com/photos/1499327/pexels-photo-1499327.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Fashion Photography - Award Winner">
                        <div class="featured-overlay">
                            <h3>Elegance in Motion</h3>
                            <p>Fashion Photography Excellence Award 2024</p>
                        </div>
                    </div>
                    
                    <div class="featured-item" data-category="nature">
                        <img src="https://images.pexels.com/photos/1670187/pexels-photo-1670187.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Nature Photography - Contest Winner">
                        <div class="featured-overlay">
                            <h3>Wildlife Wonder</h3>
                            <p>Wildlife Photographer of the Year - Finalist 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="stats">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item">
                        <i class="fas fa-award"></i>
                        <h3>25+</h3>
                        <p>Awards Won</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-camera"></i>
                        <h3>500+</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <h3>1000+</h3>
                        <p>Happy Clients</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-calendar"></i>
                        <h3>8+</h3>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="container">
                <h2>Ready to Create Something Beautiful?</h2>
                <p>Let's discuss your photography needs and bring your vision to life</p>
                <a href="<?= site_url('/contact-us')?>" class="btn btn-primary">Get In Touch</a>
            </div>
        </section>
    </main>
<?php get_footer();?>