<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/adminDashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="styles/adminDashboard.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Dashboard</title>
</head>
<body>
    
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="title" id="admin"><h2>Admin Dashboard</h2></span>
                    </a>
                    
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                    
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-plus-square"></i></span>
                        <span class="title">Add new parfumes</span>
                    </a>
                    
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="title">Customers</span>
                    </a>
                    
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-comments"></i></span>
                        <span class="title">Messages</span>
                    </a>    
                    
                </li>
                <li>
                    <a href="#">
                       <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="title">Sign out</span> 
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle"></div>
                <div class="search">
                    <label for="search">
                        <input type="text" placeholder="Search here" name="search">
                    </label>
                </div>
                <div class="user">
                    <img src="images/fragrance.png" alt="">
                </div>
            </div>

            <div class="cardBox">
                <div class="card">
                    <div>
                        <span class="numbers">1,234</span>
                        <span class="cardName">Views</span>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <span class="numbers">123</span>
                        <span class="cardName">Sales</span>
                    </div>
                    <div class="iconBox">
                    <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <span class="numbers">$12,345</span>
                        <span class="cardName">Earnings</span>
                    </div>
                    <div class="iconBox">
                    <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View all</a>
                    </div>

                    <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>

                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status inprogress">In progress</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Waiting</td>
                            <td><span class="status inprogress">In progress</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                            
                        </tr>
                        <tr>
                            <td>Versace Eros Women</td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                            
                        </tr>
                    </tbody>
                </table>

                </div>

                

                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>
                    <table>
                        <tbody>
                            <tr>
                                <td><i class="fas fa-user-circle"></i></td>
                                <td><h4>Alex <br><span> david@gmail.com</span></h4></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user-circle"></i></td>
                                <td><h4>Alex <br><span> david@gmail.com</span></h4></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user-circle"></i></td>
                                <td><h4>Alex <br><span> david@gmail.com</span></h4></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user-circle"></i></td>
                                <td><h4>Alex <br><span> david@gmail.com</span></h4></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user-circle"></i></td>
                                <td><h4>Alex <br><span> david@gmail.com</span></h4></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user-circle"></i></td>
                                <td><h4>Alex <br><span> david@gmail.com</span></h4></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user-circle"></i></td>
                                <td><h4>Alex <br><span> david@gmail.com</span></h4></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user-circle"></i></td>
                                <td><h4>Alex <br><span> david@gmail.com</span></h4></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

        
    </div>

</body>
</html>