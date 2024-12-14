<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Pixel 9 Pro XL Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item img {
            width: 100%;
            height: auto;
        }
        .product-details {
            margin-top: 20px;
        }
        .price {
            color: green;
            font-size: 24px;
            font-weight: bold;
        }
        .original-price {
            text-decoration: line-through;
            color: red;
        }
        .discount {
            color: orange;
            font-size: 14px;
        }
        .exchange, .emi {
            font-size: 14px;
        }
        .sidebar img {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
            cursor: pointer;
        }
        .table td {
            padding: 10px;
            text-align: left;
            vertical-align: top;
        }
        .table th {
            text-align: left;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <table class="table table-bordered">
        <tr>
            <th colspan="2"><h3>Google Pixel 9 Pro XL 512 GB, 16 GB RAM, Obsidian, Mobile Phone</h3></th>
        </tr>
        <tr>
            <td rowspan="4" style="width: 50%;">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./brand/download (1).jpeg" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="./brand/download (2).jpeg" class="d-block w-100" alt="Image 2">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </td>
            <td><span class="price">₹121,999.00</span> <span class="original-price">₹134,999.00</span> <span class="discount">(10% off)</span></td>
        </tr>
        <tr>
            <td><p class="exchange">Exchange Offer: Up to ₹50,000 off</p></td>
        </tr>
        <tr>
            <td><p class="emi">EMI: ₹5,743 per month</p></td>
        </tr>
        <tr>
            <td><button class="btn btn-success mb-3">Buy</button></td>
        </tr>
        <tr>
            <td colspan="2">
                <h4>Gain more with offers (7):</h4>
                <ul>
                    <li>10% Instant Discount with IDFC Credit Card EMI</li>
                    <li>10% Instant Discount with Federal Credit Card EMI</li>
                    <li>Flat 1000 Instant Discount with OneCard Credit Card</li>
                    <li>Save more with EMI/Cashback options</li>
                    <li>Credit Card No-Cost EMI Options</li>
                    <li>EMIs (Credit Cards) from ₹6787.42/month</li>
                    <li>Warranty: 1 Year manufacturer warranty</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h4>Key Features:</h4>
                <ul>
                    <li>16 GB RAM, 512 GB Internal Memory</li>
                    <li>17.27 cm (6.8 inch) Display</li>
                    <li>50 MP Main Camera, 48 MP, 48 MP</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h4>Return Policy:</h4>
                <ul>
                    <li>For return eligibility, all accessories, product & packaging need to be returned in original condition.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h4>Promotional Materials</h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <td><img src="./brand/download (1).jpeg" alt="Promotion 1" onclick="changeCarouselImage(0)"></td>
                            <td><img src="./brand/download (2).jpeg" alt="Promotion 2" onclick="changeCarouselImage(1)"></td>
                        </tr>
                        <tr>
                            <td><img src="./brand/download (3).jpeg" alt="Promotion 3" onclick="changeCarouselImage(2)"></td>
                            <td><img src="./brand/download.jpeg" alt="Promotion 4" onclick="changeCarouselImage(3)"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript to Change Carousel Image -->
<script>
    function changeCarouselImage(index) {
        $('#carouselExampleIndicators').carousel(index);
    }
</script>

</body>
</html>
