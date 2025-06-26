<?php 
get_header();
?>

<main>
        <section class="page-header">
            <div class="container">
                <h1>Photography Gallery</h1>
                <p>Explore my collection of award-winning photographs across various genres</p>
            </div>
        </section>

        <section class="gallery-section">
            <div class="container">
                <div class="gallery-filters">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="portrait">Portraits</button>
                    <button class="filter-btn" data-filter="wedding">Weddings</button>
                    <button class="filter-btn" data-filter="landscape">Landscapes</button>
                    <button class="filter-btn" data-filter="street">Street</button>
                    <button class="filter-btn" data-filter="nature">Nature</button>
                </div>

                <div class="gallery-grid" id="gallery-grid">
                    <!-- Portrait Category -->
                    <div class="gallery-item" data-category="portrait">
                        <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Portrait 1">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    
                    <div class="gallery-item" data-category="portrait">
                        <img src="https://images.pexels.com/photos/1499327/pexels-photo-1499327.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Portrait 2">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    
                    <div class="gallery-item" data-category="portrait">
                        <img src="https://images.pexels.com/photos/1043471/pexels-photo-1043471.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Portrait 3">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>

                    <!-- Wedding Category -->
                    <div class="gallery-item" data-category="wedding">
                        <img src="https://images.pexels.com/photos/1444442/pexels-photo-1444442.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Wedding 1">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    
                    <div class="gallery-item" data-category="wedding">
                        <img src="https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Wedding 2">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    
                    <div class="gallery-item" data-category="wedding">
                        <img src="https://images.pexels.com/photos/1134204/pexels-photo-1134204.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Wedding 3">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>

                    <!-- Landscape Category -->
                    <div class="gallery-item" data-category="landscape">
                        <img src="https://images.pexels.com/photos/1366919/pexels-photo-1366919.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Landscape 1">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    
                    <div class="gallery-item" data-category="landscape">
                        <img src="https://images.pexels.com/photos/1287145/pexels-photo-1287145.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Landscape 2">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    
                    <div class="gallery-item" data-category="landscape">
                        <img src="https://images.pexels.com/photos/1323550/pexels-photo-1323550.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Landscape 3">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>

                    <!-- Street Category -->
                    <div class="gallery-item" data-category="street">
                        <img src="https://images.pexels.com/photos/1261728/pexels-photo-1261728.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Street 1">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    
                    <div class="gallery-item" data-category="street">
                        <img src="https://images.pexels.com/photos/1105766/pexels-photo-1105766.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Street 2">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    
                    <div class="gallery-item" data-category="street">
                        <img src="https://images.pexels.com/photos/1108099/pexels-photo-1108099.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Street 3">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>

                    <!-- Nature Category -->
                    <div class="gallery-item" data-category="nature">
                        <img src="https://images.pexels.com/photos/1670187/pexels-photo-1670187.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Nature 1">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    
                    <div class="gallery-item" data-category="nature">
                        <img src="https://images.pexels.com/photos/1054655/pexels-photo-1054655.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Nature 2">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    
                    <div class="gallery-item" data-category="nature">
                        <img src="https://images.pexels.com/photos/1090973/pexels-photo-1090973.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Nature 3">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox">
        <div class="lightbox-content">
            <span class="lightbox-close">&times;</span>
            <img id="lightbox-img" src="" alt="">
            <div class="lightbox-nav">
                <button class="lightbox-prev" id="lightbox-prev"><i class="fas fa-chevron-left"></i></button>
                <button class="lightbox-next" id="lightbox-next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>

<?php 
get_footer();
?>