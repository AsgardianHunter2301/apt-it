<?php
    // Common header file (include header.php)
    include 'header.php'; 
?>
 
<nav class="navbar">
    <?php
        $navItems = [
            "AI" => ["label" => "[AI]", "page" => "ai.php"],
            "AIR" => ["label" => "[AIR]", "page" => "air.php"],
            "FIRE" => ["label" => "[FIRE]", "page" => "fire.php"],
            "LIFE" => ["label" => "[LIFE]", "page" => "life.php"],
            "SAGE" => ["label" => "[SAGE]", "page" => "sage.php"],
            "TIME" => ["label" => "[TIME]", "page" => "time.php"],
            "NOT-BAD" => ["label" => "[NOT-BAD]", "page" => "not-bad.php"],
            "ET" => ["label" => "[ET]", "page" => "erythrocyte.php"]
        ];
        foreach ($navItems as $id => $data) {
            $activeClass = ($current_page === basename($data['page'], '.php')) ? 'active' : '';
            // Pass the page name to the JavaScript function
            echo "<a href=\"javascript:void(0);\" id=\"$id\" class=\"$activeClass\" onclick=\"redirectToPage('{$data['page']}')\">{$data['label']}</a>";
        }
    ?>
</nav>

<div class="divider"></div>

<!-- Main content -->
<main class="container">
    <!-- Section 1 -->
    <div class="domain domain2">
        <h2>Learning Improved Future Endeavours [LIFE]</h2>
        <img src="/images/baby_pelican.jpg" alt="LIFE Image">
        <p>Why one should pursue a life of learning, and the benefits of learning to improve one's life and the world.</p>
    </div>

    <!-- Section 2 -->
    <div class="domain domain2">
        <h2>The Benefits of Lifelong Learning</h2>
        <img src="/images/lifelong_learning.jpg" alt="Lifelong Learning">
        <p>Exploring how continuous learning throughout life contributes to personal growth, career development, and overall happiness.</p>
    </div>

    <!-- Section 3 -->
    <div class="domain domain2">
        <h2>Personal Growth Through Knowledge</h2>
        <img src="/images/personal_growth.jpg" alt="Personal Growth">
        <p>Understanding the connection between learning new skills and improving oneself emotionally, mentally, and professionally.</p>
    </div>

    <!-- Section 4 -->
    <div class="domain domain2">
        <h2>Education as a Lifelong Journey</h2>
        <img src="/images/education_journey.jpg" alt="Education Journey">
        <p>The importance of embracing education as a lifelong journey and how it can help navigate different life stages with purpose and confidence.</p>
    </div>

    <!-- Section 5 -->
    <div class="domain domain2">
        <h2>Learning for Social Impact</h2>
        <img src="/images/social_impact.jpg" alt="Learning for Social Impact">
        <p>How learning can be used to drive social change, promote equality, and create positive impacts in communities around the world.</p>
    </div>

    <!-- Section 6 -->
    <div class="domain domain2">
        <h2>The Future of Education</h2>
        <img src="/images/future_of_education.jpg" alt="Future of Education">
        <p>Exploring the future of education and how technology, innovation, and global connections will shape the way we learn and teach in the years to come.</p>
    </div>
</main>

<?php
    // Common footer file (include footer.php)
    include 'footer.php'; 
?>
