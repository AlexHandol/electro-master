<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="{{ Route::is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="{{ Route::is('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">Shop</a></li>
                <li class="{{ Route::is('shop.hot-deals') ? 'active' : '' }}"><a href="{{ route('shop.hot-deals') }}">Hot
                        Deals</a></li>
                <li class="nav-item">
                    <a href="#" class="category-toggle">Categories</a>
                    <div class="category-dropdown">
                        <div class="category-list">
                            <div class="category-item">
                                <span>&#9656;</span> <a href="{{ route('shop.PCs') }}">PCs</a>
                            </div>
                            <div class="category-item">
                                <span>&#9656;</span> <a href="{{ route('shop.laptops') }}">Laptops</a>
                            </div>
                            <div class="category-item">
                                <span>&#9656;</span> <a href="{{ route('shop.smartphones') }}">Smartphones</a>
                            </div>
                            <div class="category-item"><span>&#9656;</span> Cameras</div>
                            <div class="category-item"><span>&#9656;</span> Accessories</div>
                        </div>
                    </div>
                </li>
                <li class="{{ Route::is('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">About Us</a></li>
                <li class="{{ Route::is('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">Contact Us</a></li>
                <li class="{{ Route::is('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">Privacy Policy</a>
                </li>
                <li class="{{ Route::is('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">Orders and
                        Returns</a></li>
                <li class="{{ Route::is('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">Terms &
                        Conditions</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoryToggle = document.querySelector('.category-toggle');
        const navItem = document.querySelector('.nav-item');
        const categoryDropdown = document.querySelector('.category-dropdown');

        // Toggle the dropdown when the Categories link is clicked
        categoryToggle.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent the default anchor link behavior
            navItem.classList.toggle('open'); // Toggle the open class on the parent li
        });

        // Close the dropdown if clicked outside
        document.addEventListener('click', function(e) {
            // Check if the click was outside the .category-dropdown or the category toggle link
            if (!navItem.contains(e.target) && !categoryToggle.contains(e.target)) {
                navItem.classList.remove('open'); // Remove the 'open' class to close the dropdown
            }
        });
    });
</script>
