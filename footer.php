<?php
// Start the output buffer at the beginning of the page (if not already done)
ob_start();
?>

<!-- Your page content here -->

<footer class="footer">
    <a href="javascript:void(0);" id="footerAudioToggle" aria-label="Toggle Audio">
        Hello Altitude!
    </a>
</footer>

<!-- Add the audio element -->
<audio id="audioPlayer" src="hello.mp3"></audio>

<script>
    // Get references to the audio player and toggle link
    const audio = document.getElementById('audioPlayer');
    const footerAudioToggle = document.getElementById('footerAudioToggle');

    // Add a click event listener to the toggle link
    footerAudioToggle.addEventListener('click', () => {
        if (audio.paused) {
            audio.play(); // Play the audio
            footerAudioToggle.textContent = "We are going onto bigger and better things now!";
        } else {
            audio.pause(); // Pause the audio
            footerAudioToggle.textContent = "Think outside the tesseract!";
        }
    });
</script>

<script>
    // Define the redirect function
    function redirectToPage(page) {
        // Redirect to the specified page
        window.location.href = page;
    }
</script>

</body>
</html>

<?php
// Flush the output buffer at the end of the page
ob_end_flush();
?>
