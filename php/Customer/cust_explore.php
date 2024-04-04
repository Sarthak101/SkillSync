<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Explore Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F9F9F9;
            color: #333333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .search-bar-container {
            position: relative;
            margin-bottom: 20px;
        }

        .search-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #CCCCCC;
        }

        .search-bar {
            width: calc(100% - 40px);
            padding: 10px 10px 10px 40px;
            border: 1px solid #CCCCCC;
            border-radius: 5px;
            box-sizing: border-box;
            color: #333333;
        }

        .category-container {
            display: flex;
            flex-wrap: wrap;
        }

        .category-card {
            width: calc(25% - 20px);
            margin: 10px;
            padding: 20px;
            background-color: #EFEFEF;
            border-radius: 5px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .category-card:hover {
            background-color: #D9D9D9;
            transform: translateY(-5px);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .category-card i {
            color: #695CFE;
        }

        .category-card h3 {
            color: #333333;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php include_once('cust_nav.php'); ?>
    <div class="container">
        <div class="search-bar-container">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-bar" placeholder="Search categories..." onkeyup="filterCategories()">
        </div>
        <div class="category-container">
            <!-- Your category cards here -->
            <div class="category-card" data-category="housework">
                <i class="fas fa-home fa-3x"></i>
                <h3>Housework</h3>
            </div>
            <div class="category-card" data-category="vehicle repair">
                <i class="fas fa-car fa-3x"></i>
                <h3>Vehicle Repair</h3>
            </div>
            <div class="category-card" data-category="plumbing">
                <i class="fas fa-wrench fa-3x"></i>
                <h3>Plumbing</h3>
            </div>
            <div class="category-card" data-category="carpenter">
                <i class="fas fa-hammer fa-3x"></i>
                <h3>Carpenter</h3>
            </div>
            <div class="category-card" data-category="electrical work">
                <i class="fas fa-bolt fa-3x"></i>
                <h3>Electrical Work</h3>
            </div>

            <div class="category-card" data-category="pest control">
                <i class="fas fa-bug fa-3x"></i>
                <h3>Pest Control</h3>
            </div>
        </div>
    </div>

    <script>
        function filterCategories() {
            var input, filter, cards, card, category, i, txtValue;
            input = document.querySelector('.search-bar');
            filter = input.value.toLowerCase();
            cards = document.querySelectorAll('.category-card');
            for (i = 0; i < cards.length; i++) {
                card = cards[i];
                category = card.getAttribute('data-category');
                txtValue = category.toLowerCase();
                if (txtValue.indexOf(filter) > -1) {
                    card.style.display = "";
                } else {
                    card.style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
