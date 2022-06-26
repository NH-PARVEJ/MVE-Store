        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">MVE Store</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="{{route('admin.dashboard')}}">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>
            </li>


       <!-- Product Management Start -->
        <li class="menu-label">Store Management</li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-tshirt"></i>
                </div>
                <div class="menu-title">Product</div>
              </a>
              <ul>
                <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Add New Product</a>
                </li>
                <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Manage All Product</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-grid-small"></i>
                </div>
                <div class="menu-title">Category</div>
              </a>
              <ul>
                <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Add New Category</a>
                </li>
                <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Manage All Category</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-tag"></i>
                </div>
                <div class="menu-title">Brands</div>
              </a>
              <ul>
                <li> <a href="{{route('brand.create')}}"><i class="bi bi-circle"></i>Add New Brands</a>
                </li>
                <li> <a href="{{route('brand.manage')}}"><i class="bi bi-circle"></i>Manage All Brands</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-gift"></i>
                </div>
                <div class="menu-title">Coupon</div>
              </a>
              <ul>
                <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Add New Coupon</a>
                </li>
                <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Manage All Coupon</a>
                </li>
              </ul>
            </li>


            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-cart"></i>
                </div>
                <div class="menu-title">Order</div>
              </a>
              <ul>
                <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Add New Order</a>
                </li>
                <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Manage All Order</a>
                </li>
              </ul>
            </li>

            <li class="menu-label">Service Area Management</li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-map"></i>
                </div>
                <div class="menu-title">Service Area</div>
              </a>
              <ul>
                <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Add New Area</a>
                </li>
                <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Manage All Area</a>
                </li>
              </ul>
            </li>

            <li class="menu-label">Platform Settings</li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-coin"></i>
                </div>
                <div class="menu-title">Currency</div>
              </a>
              <ul>
                <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Add New Currency</a>
                </li>
                <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Manage All Currency</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-delivery"></i>
                </div>
                <div class="menu-title">Shipping Method</div>
              </a>
              <ul>
                <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Add New Shipping</a>
                </li>
                <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Manage All Shipping</a>
                </li>
              </ul>
            </li>

            <li class="menu-label">Customers Management</li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-network"></i>
                </div>
                <div class="menu-title">Customers</div>
              </a>
              <ul>
                <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Add New Customer</a>
                </li>
                <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Manage All Customers</a>
                </li>
              </ul>
            </li>
            
            

    <!-- Vandor Management Start -->
       <li class="menu-label">Vendor Management</li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-store"></i>
                </div>
                <div class="menu-title">Vendors</div>
              </a>
              <ul>
                <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Add New Vendor</a>
                </li>
                <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Manage All Vendor</a>
                </li>
              </ul>
            </li>
        <!-- Vandor Management End -->
          </ul>
          <!--end navigation-->
       </aside>
       <!--end sidebar -->