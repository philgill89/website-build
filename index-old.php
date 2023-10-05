<section>

    <div class="hero">
        <div class="hero__text">
            <p class="hero__subtitle">An Age to make</p>
            <h1 class="hero__title">A Lifetime to Love</h1>
            <p class="hero__body">We create beautiful products from the finest sheepskin and leather. Designed to last years, or even decades, to come</p>
            <button class="button button--primary">Women's Sheepskins</button>
        </div>
    </div>
</section>

<?php
$promos = [
    1 => [
        'image' => '/assets/Promo1.jpg',
        'title' => 'Promo 1',
        'body' => 'Welcome to my first website, here you’ll find components and sections that i’ve built.',
        'button' => 'Find Out More',
    ],
    2 => [
        'image' => '/assets/Promo2.jpg',
        'title' => 'Promo 1',
        'body' => 'Welcome to my first website, here you’ll find components and sections that i’ve built.',
        'button' => 'Find Out More',
    ],
    3 =>[
        'image' => '/assets/Promo3.jpg',
        'title' => 'Mens Shirts',
        'body' => 'Welcome to my first website, here you’ll find components and sections that i’ve built.',
        'button' => 'Find Out More',
    ],
];
?>

<section class="promos">
    <?php
    foreach ($promos as $promo) {
        include 'promo-card.php';
    }
    ?>


</section>