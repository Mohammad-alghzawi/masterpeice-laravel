@extends('dash.master')

@section('title')
    Dashbored
@endsection

@section('content')


<div class="col col-lg-9">
                     <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab_dashboard" role="tabpanel">
                           <div class="row">
                              <div class="col col-lg-4">
                                 <div class="funfact_item"
                                    style="background-image: url('assets/images/funfact/funfact_bg_1.png');" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="item_content">
                                       <h3>Total Products</h3>
                                       <span>2,450</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col col-lg-4">
                                 <div class="funfact_item"
                                    style="background-image: url('assets/images/funfact/funfact_bg_2.png');" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="item_content">
                                       <h3>Total Sales</h3>
                                       <span>3,460</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col col-lg-4">
                                 <div class="funfact_item"
                                    style="background-image: url('assets/images/funfact/funfact_bg_3.png');" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="item_content">
                                       <h3>Order Pending</h3>
                                       <span>$10,250</span>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="total_revenue" data-aos="fade-up" data-aos-duration="2000">
                              <div class="vd_title_wrap">
                                 <h3>Total Revenue</h3>
                                 {{-- <form action="#">
                                    <div class="select_option clearfix m-0">
                                       <select>
                                          <option data-display="Select">Nothing</option>
                                          <option value="1" selected>Last 1 Year</option>
                                          <option value="2">Last 2 Year</option>
                                          <option value="3">Last 3 Year</option>
                                          <option value="4">Last 4 Year</option>
                                       </select>
                                    </div>
                                 </form> --}}
                              </div>
                              <div class="vd_shadow">
                                 <canvas id="revenue_chart"></canvas>
                              </div>
                           </div>

                           <div class="row">
                              

                             
                           </div>

                           
                        </div>

                        <div class="tab-pane fade" id="tab_products" role="tabpanel">
                           <div class="trending_products">
                              <div class="vd_title_wrap">
                                 <h3>Trending Products</h3>
                                 <button type="button" class="btn custom_btn"><i class="far fa-plus"></i> Add
                                    Product</button>
                              </div>
                              <div class="vd_shadow p-0">
                                 <div class="vd_table table-responsive">
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                             <th>Product Image</th>
                                             <th>Product Name</th>
                                             <th>Category</th>
                                             <th>Price</th>
                                             <th>Stock</th>
                                             <th>Sales</th>
                                             <th>Edit/Delete</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="item_image">
                                                   <img src="assets/images/cart/cart1.png" alt="image_not_found">
                                                </div>
                                             </td>
                                             <td>
                                                <h4 class="item_title"><a href="shop-list.html"></a>Neck Velvet Dress
                                                </h4>
                                             </td>
                                             <td>
                                                <ul class="category_list ul_li">
                                                   <li><a href="#!">Women Clothes</a></li>
                                                </ul>
                                             </td>
                                             <td><span>$205</span></td>
                                             <td><span>1000</span></td>
                                             <td><span>2000</span></td>
                                             <td>
                                                <ul class="btns_group ul_li">
                                                   <li>
                                                      <button type="button" class="bg_green">
                                                         <i class="fas fa-edit"></i>
                                                      </button>
                                                   </li>
                                                   <li>
                                                      <button type="button" class="bg_orange">
                                                         <i class="fas fa-trash-alt"></i>
                                                      </button>
                                                   </li>
                                                </ul>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="item_image">
                                                   <img src="assets/images/cart/cart2.png" alt="image_not_found">
                                                </div>
                                             </td>
                                             <td>
                                                <h4 class="item_title"><a href="shop-list.html"></a>Neck Velvet Dress
                                                </h4>
                                             </td>
                                             <td>
                                                <ul class="category_list ul_li">
                                                   <li><a href="#!">Women Clothes</a></li>
                                                </ul>
                                             </td>
                                             <td><span>$205</span></td>
                                             <td><span>1000</span></td>
                                             <td><span>2000</span></td>
                                             <td>
                                                <ul class="btns_group ul_li">
                                                   <li>
                                                      <button type="button" class="bg_green">
                                                         <i class="fas fa-edit"></i>
                                                      </button>
                                                   </li>
                                                   <li>
                                                      <button type="button" class="bg_orange">
                                                         <i class="fas fa-trash-alt"></i>
                                                      </button>
                                                   </li>
                                                </ul>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="item_image">
                                                   <img src="assets/images/cart/cart3.png" alt="image_not_found">
                                                </div>
                                             </td>
                                             <td>
                                                <h4 class="item_title"><a href="shop-list.html"></a>Neck Velvet Dress
                                                </h4>
                                             </td>
                                             <td>
                                                <ul class="category_list ul_li">
                                                   <li><a href="#!">Women Clothes</a></li>
                                                </ul>
                                             </td>
                                             <td><span>$205</span></td>
                                             <td><span>1000</span></td>
                                             <td><span>2000</span></td>
                                             <td>
                                                <ul class="btns_group ul_li">
                                                   <li>
                                                      <button type="button" class="bg_green">
                                                         <i class="fas fa-edit"></i>
                                                      </button>
                                                   </li>
                                                   <li>
                                                      <button type="button" class="bg_orange">
                                                         <i class="fas fa-trash-alt"></i>
                                                      </button>
                                                   </li>
                                                </ul>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="item_image">
                                                   <img src="assets/images/product/product33.png" alt="image_not_found">
                                                </div>
                                             </td>
                                             <td>
                                                <h4 class="item_title"><a href="shop-list.html"></a>Neck Velvet Dress
                                                </h4>
                                             </td>
                                             <td>
                                                <ul class="category_list ul_li">
                                                   <li><a href="#!">Women Clothes</a></li>
                                                </ul>
                                             </td>
                                             <td><span>$205</span></td>
                                             <td><span>1000</span></td>
                                             <td><span>2000</span></td>
                                             <td>
                                                <ul class="btns_group ul_li">
                                                   <li>
                                                      <button type="button" class="bg_green">
                                                         <i class="fas fa-edit"></i>
                                                      </button>
                                                   </li>
                                                   <li>
                                                      <button type="button" class="bg_orange">
                                                         <i class="fas fa-trash-alt"></i>
                                                      </button>
                                                   </li>
                                                </ul>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="item_image">
                                                   <img src="assets/images/product/product7.png" alt="image_not_found">
                                                </div>
                                             </td>
                                             <td>
                                                <h4 class="item_title"><a href="shop-list.html"></a>Neck Velvet Dress
                                                </h4>
                                             </td>
                                             <td>
                                                <ul class="category_list ul_li">
                                                   <li><a href="#!">Women Clothes</a></li>
                                                </ul>
                                             </td>
                                             <td><span>$205</span></td>
                                             <td><span>1000</span></td>
                                             <td><span>2000</span></td>
                                             <td>
                                                <ul class="btns_group ul_li">
                                                   <li>
                                                      <button type="button" class="bg_green">
                                                         <i class="fas fa-edit"></i>
                                                      </button>
                                                   </li>
                                                   <li>
                                                      <button type="button" class="bg_orange">
                                                         <i class="fas fa-trash-alt"></i>
                                                      </button>
                                                   </li>
                                                </ul>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="item_image">
                                                   <img src="assets/images/product/product35.png" alt="image_not_found">
                                                </div>
                                             </td>
                                             <td>
                                                <h4 class="item_title"><a href="shop-list.html"></a>Neck Velvet Dress
                                                </h4>
                                             </td>
                                             <td>
                                                <ul class="category_list ul_li">
                                                   <li><a href="#!">Women Clothes</a></li>
                                                </ul>
                                             </td>
                                             <td><span>$205</span></td>
                                             <td><span>1000</span></td>
                                             <td><span>2000</span></td>
                                             <td>
                                                <ul class="btns_group ul_li">
                                                   <li>
                                                      <button type="button" class="bg_green">
                                                         <i class="fas fa-edit"></i>
                                                      </button>
                                                   </li>
                                                   <li>
                                                      <button type="button" class="bg_orange">
                                                         <i class="fas fa-trash-alt"></i>
                                                      </button>
                                                   </li>
                                                </ul>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="tab_orders" role="tabpanel">
                           <div class="recent_orders">
                              <div class="vd_title_wrap">
                                 <h3>Orders</h3>
                                 <button type="button" class="btn custom_btn"><i class="far fa-plus"></i> Add
                                    Product</button>
                              </div>
                              <div class="vd_shadow p-0">
                                 <div class="vd_table table-responsive">
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                             <th>Order ID</th>
                                             <th>Product</th>
                                             <th>Quantity</th>
                                             <th>Amount</th>
                                             <th>Status</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td><span>#02345</span></td>
                                             <td><span>Fried Meat</span></td>
                                             <td><span>02</span></td>
                                             <td><span>$70</span></td>
                                             <td><span class="status_btn bg_green">Shipped</span></td>
                                          </tr>
                                          <tr>
                                             <td><span>#02345</span></td>
                                             <td><span>Fried Meat</span></td>
                                             <td><span>02</span></td>
                                             <td><span>$70</span></td>
                                             <td><span class="status_btn bg_yellow">Shipped</span></td>
                                          </tr>
                                          <tr>
                                             <td><span>#02345</span></td>
                                             <td><span>Fried Meat</span></td>
                                             <td><span>02</span></td>
                                             <td><span>$70</span></td>
                                             <td><span class="status_btn bg_blue">Pending</span></td>
                                          </tr>
                                          <tr>
                                             <td><span>#02345</span></td>
                                             <td><span>Fried Meat</span></td>
                                             <td><span>02</span></td>
                                             <td><span>$70</span></td>
                                             <td><span class="status_btn bg_orange">Canceled</span></td>
                                          </tr>
                                          <tr>
                                             <td><span>#02345</span></td>
                                             <td><span>Fried Meat</span></td>
                                             <td><span>02</span></td>
                                             <td><span>$70</span></td>
                                             <td><span class="status_btn bg_green">Shipped</span></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="tab_profile" role="tabpanel">
                           <div class="profile_table">
                              <div class="vd_title_wrap">
                                 <h3>Profile</h3>
                                 <button type="button" class="btn custom_btn"><i class="far fa-plus"></i> Add
                                    Product</button>
                              </div>
                              <div class="vd_shadow p-0">
                                 <div class="vd_table table-responsive">
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                             <th>Profile</th>
                                             <th>Edit</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td><span><strong>Company Name</strong></span></td>
                                             <td><span>Fashion Store</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>Email Address</strong></span></td>
                                             <td><span>Mark.Enderess@Mail.Com</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>Country/Region</strong></span></td>
                                             <td><span>Downers Grove, IL</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>Year Established</strong></span></td>
                                             <td><span>2018</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>Total Employees</strong></span></td>
                                             <td><span>101 - 200 People</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>Category</strong></span></td>
                                             <td><span>Clothing</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>Street Address</strong></span></td>
                                             <td><span>549 Sulphur Springs Road</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>City/State</strong></span></td>
                                             <td><span>Downers Grove, IL</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>Zip</strong></span></td>
                                             <td><span>60515</span></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="tab_settings" role="tabpanel">
                           <div class="vd_shadow p-0">
                              <div class="vd_account_settings">
                                 <h3 class="wrap_title">Notifications</h3>
                                 <form action="#">
                                    <ul class="radio_btns_list ul_li_block">
                                       <li>
                                          <div class="radio_item">
                                             <input id="allow_desktop_notifications" type="radio"
                                                name="notifications_radio">
                                             <label for="allow_desktop_notifications">Allow Desktop
                                                Notifications</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="email_radio" type="radio" name="notifications_radio">
                                             <label for="email_radio">Mark.Enderess@Mail.Com</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="downers_grove_il" type="radio" name="notifications_radio">
                                             <label for="downers_grove_il">Downers Grove, IL</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="year" type="radio" name="notifications_radio">
                                             <label for="year">2018</label>
                                          </div>
                                       </li>
                                    </ul>
                                 </form>
                              </div>

                              <div class="vd_account_settings">
                                 <h3 class="wrap_title">Deactivate Account</h3>
                                 <form action="#">
                                    <ul class="radio_btns_list ul_li_block">
                                       <li>
                                          <div class="radio_item">
                                             <input id="clothing" type="radio" name="deactivate_account_radio">
                                             <label for="clothing">Clothing</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="address_radio" type="radio" name="deactivate_account_radio"
                                                checked>
                                             <label for="address_radio">549 Sulphur Springs Road</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="downers_grove_il2" type="radio" name="deactivate_account_radio">
                                             <label for="downers_grove_il2">Downers Grove, IL</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="order_id" type="radio" name="deactivate_account_radio">
                                             <label for="order_id">60515</label>
                                          </div>
                                       </li>
                                       <li>
                                          <button type="button" class="btn custom_btn">Deactivate Account</button>
                                       </li>
                                    </ul>
                                 </form>
                              </div>

                              <div class="vd_account_settings">
                                 <h3 class="wrap_title">Delete Account</h3>
                                 <form action="#">
                                    <ul class="radio_btns_list ul_li_block">
                                       <li>
                                          <div class="radio_item">
                                             <input id="clothing2" type="radio" name="delete_account_radio">
                                             <label for="clothing2">Clothing</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="address_radio2" type="radio" name="delete_account_radio">
                                             <label for="address_radio2">549 Sulphur Springs Road</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="downers_grove_il3" type="radio" name="delete_account_radio">
                                             <label for="downers_grove_il3">Downers Grove, IL</label>
                                          </div>
                                       </li>
                                       <li>
                                          <button type="button" class="btn custom_btn">Delete Account</button>
                                       </li>
                                    </ul>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
          @endsection
