@extends('frontend.master')
@section('x')

<div class="order-page pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-wrap account-page-sidemenu">
                    <nav class="account-page-menu">
                        <ul>
                            <li class="menu-has-children ">
                                <a href="manage-my-account.html">Manag My Account</a>
                                <span class="toggle-account-menu">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                                <ul class="account-sub-menu">
                                    <li><a href="my-profile.html">My Profile</a></li>
                                    <li><a href="address-book.html">Address Book</a></li>
                                    <li><a href="my-payment-option.html">My Payment Option</a></li>
                                    <li><a href="coupon.html">Coupon</a></li>
                                </ul>
                            </li>
                            <li class="current-menu-item"><a href="my-order.html">My Order</a></li>
                            <li><a href="my-reviwe.html">My Reviwe</a></li>
                            <li><a href="my-wishlist.html">My Wishlist</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="section-wrap">
                    <div class="recent-order">
                        <div class="account-page-header">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3 class="title">My Order</h3>
                                </div>
                            </div>
                        </div>
                        <div class="tab-style-four">
                            <ul class="nav nav-tabs" id="addressBookTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link active" id="Active-Order-tab" data-toggle="tab" href="#Active-Order" role="tab" aria-controls="Active-Order" aria-selected="true"> Active Order</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="Recent-Order-tab" data-toggle="tab" href="#Recent-Order" role="tab" aria-controls="Recent-Order" aria-selected="false"> Recent Order</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="addressBookTabContent">
                                <div class="tab-pane fade show active" id="Active-Order" role="tabpanel" aria-labelledby="Active-Order-tab">
                                    <div class="order-table">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Iteam</th>
                                                    <th scope="col" colspan="2">Total Price</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>
                                                        <p>Order No: 320KL562KJH21</p>
                                                        <p>Order Time : 05:00 PM, Sep 5, 2020</p>
                                                    </td>
                                                    <td>
                                                        <div class="item-image-lsit d-flex align-items-center">
                                                            <div class="single-item">
                                                                <img src="images/items-1.png" alt="images" />
                                                            </div>
                                                            <div class="single-item">
                                                                <img src="images/items-2.png" alt="images" />
                                                            </div>
                                                            <div class="single-item">
                                                                <img src="images/items-3.png" alt="images" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p>Order amount:</p>
                                                        <span class="amount">$63.00</span>
                                                    </td>
                                                    <td><a href="my-order-details.html"><i class="fas fa-user-cog"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                        <p>Order No: 320KL562KJH21</p>
                                                        <p>Order Time : 05:00 PM, Sep 5, 2020</p>
                                                    </td>
                                                    <td>
                                                        <div class="item-image-lsit d-flex align-items-center">
                                                            <div class="single-item">
                                                                <img src="images/items-1.png" alt="images" />
                                                            </div>
                                                            <div class="single-item">
                                                                <img src="images/items-2.png" alt="images" />
                                                            </div>
                                                            <div class="single-item">
                                                                <img src="images/items-3.png" alt="images" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p>Order amount:</p>
                                                        <span class="amount">$63.00</span>
                                                    </td>
                                                    <td><a href="my-order-details.html"><i class="fas fa-user-cog"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                        <p>Order No: 320KL562KJH21</p>
                                                        <p>Order Time : 05:00 PM, Sep 5, 2020</p>
                                                    </td>
                                                    <td>
                                                        <div class="item-image-lsit d-flex align-items-center">
                                                            <div class="single-item">
                                                                <img src="images/items-1.png" alt="images" />
                                                            </div>
                                                            <div class="single-item">
                                                                <img src="images/items-2.png" alt="images" />
                                                            </div>
                                                            <div class="single-item">
                                                                <img src="images/items-3.png" alt="images" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p>Order amount:</p>
                                                        <span class="amount">$63.00</span>
                                                    </td>
                                                    <td><a href="my-order-details.html"><i class="fas fa-user-cog"></i></a></td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Recent-Order" role="tabpanel" aria-labelledby="Recent-Order-tab">
                                    <div class="order-table">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Iteam</th>
                                                    <th scope="col" colspan="2">Total Price</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>
                                                        <p>Order No: 320KL562KJH21</p>
                                                        <p>Order Time : 05:00 PM, Sep 5, 2020</p>
                                                    </td>
                                                    <td>
                                                        <div class="item-image-lsit d-flex align-items-center">
                                                            <div class="single-item">
                                                                <img src="images/items-1.png" alt="images" />
                                                            </div>
                                                            <div class="single-item">
                                                                <img src="images/items-2.png" alt="images" />
                                                            </div>
                                                            <div class="single-item">
                                                                <img src="images/items-3.png" alt="images" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p>Order amount:</p>
                                                        <span class="amount">$63.00</span>
                                                    </td>
                                                    <td><a href="my-order-details.html"><i class="fas fa-user-cog"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                        <p>Order No: 320KL562KJH21</p>
                                                        <p>Order Time : 05:00 PM, Sep 5, 2020</p>
                                                    </td>
                                                    <td>
                                                        <div class="item-image-lsit d-flex align-items-center">
                                                            <div class="single-item">
                                                                <img src="images/items-1.png" alt="images" />
                                                            </div>
                                                            <div class="single-item">
                                                                <img src="images/items-2.png" alt="images" />
                                                            </div>
                                                            <div class="single-item">
                                                                <img src="images/items-3.png" alt="images" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p>Order amount:</p>
                                                        <span class="amount">$63.00</span>
                                                    </td>
                                                    <td><a href="my-order-details.html"><i class="fas fa-user-cog"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                        <p>Order No: 320KL562KJH21</p>
                                                        <p>Order Time : 05:00 PM, Sep 5, 2020</p>
                                                    </td>
                                                    <td>
                                                        <div class="item-image-lsit d-flex align-items-center">
                                                            <div class="single-item">
                                                                <img src="images/items-1.png" alt="images" />
                                                            </div>
                                                            <div class="single-item">
                                                                <img src="images/items-2.png" alt="images" />
                                                            </div>
                                                            <div class="single-item">
                                                                <img src="images/items-3.png" alt="images" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p>Order amount:</p>
                                                        <span class="amount">$63.00</span>
                                                    </td>
                                                    <td><a href="my-order-details.html"><i class="fas fa-user-cog"></i></a></td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection