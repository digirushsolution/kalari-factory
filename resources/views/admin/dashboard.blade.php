
@extends('include.admin.adminapp')
@section('content')

<main class="page-content">
              
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
              <div class="col">
                <div class="card radius-10">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div>
                              <p class="mb-0 text-secondary">Total Orders</p>
                              <h4 class="my-1">4805</h4>
                              <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 5% from last week</p>
                          </div>
                          <div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="bi bi-basket2-fill"></i>
                          </div>
                      </div>
                  </div>
                </div>
               </div>
               <div class="col">
                  <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Revenue</p>
                                <h4 class="my-1">$24K</h4>
                                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 4.6 from last week</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-success text-white ms-auto"><i class="bi bi-currency-exchange"></i>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
               <div class="col">
                <div class="card radius-10">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div>
                              <p class="mb-0 text-secondary">Total Customers</p>
                              <h4 class="my-1">5.8K</h4>
                              <p class="mb-0 font-13 text-danger"><i class="bi bi-caret-down-fill"></i> 2.7 from last week</p>
                          </div>
                          <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
                          </div>
                      </div>
                  </div>
               </div>
               </div>
               <div class="col">
                <div class="card radius-10">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div>
                              <p class="mb-0 text-secondary">Bounce Rate</p>
                              <h4 class="my-1">38.15%</h4>
                              <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 12.2% from last week</p>
                          </div>
                          <div class="widget-icon-large bg-gradient-info text-white ms-auto"><i class="bi bi-bar-chart-line-fill"></i>
                          </div>
                      </div>
                  </div>
                </div>
               </div>
            </div><!--end row-->
            <div class="card radius-10">
              <div class="card-header bg-transparent">
                <div class="row g-3 align-items-center">
                  <div class="col">
                    <h5 class="mb-0">Recent Orders</h5>
                  </div>
                  <div class="col">
                    <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                      <div class="dropdown">
                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="javascript:;">Action</a>
                          </li>
                          <li><a class="dropdown-item" href="javascript:;">Another action</a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table align-middle mb-0">
                    <thead class="table-light">
                      <tr>
                        <th>#ID</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#89742</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="{{ asset('admin/images/products/11.png')}}" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                            </div>
                          </div>
                        </td>
                        <td>2</td>
                        <td>$214</td>
                        <td>Apr 8, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#68570</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="{{ asset('admin/images/products/07.png')}}" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Sports Time Watch</h6>
                            </div>
                          </div>
                        </td>
                        <td>1</td>
                        <td>$185</td>
                        <td>Apr 9, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#38567</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="{{ asset('admin/images/products/17.png')}}" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Women Red Heals</h6>
                            </div>
                          </div>
                        </td>
                        <td>3</td>
                        <td>$356</td>
                        <td>Apr 10, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#48572</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="{{ asset('admin/images/products/04.png')}}" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                            </div>
                          </div>
                        </td>
                        <td>1</td>
                        <td>$149</td>
                        <td>Apr 11, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#96857</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="{{ asset('admin/images/products/10.png')}}" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Orange Micro Headphone</h6>
                            </div>
                          </div>
                        </td>
                        <td>2</td>
                        <td>$199</td>
                        <td>Apr 15, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#68527</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="{{ asset('admin/images/products/05.png')}}" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Men Sports Shoes Nike</h6>
                            </div>
                          </div>
                        </td>
                        <td>1</td>
                        <td>$124</td>
                        <td>Apr 22, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            
          </main>
       <!--end page main-->

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

       <!--start switcher-->
       <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3" checked>
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>



       @endsection