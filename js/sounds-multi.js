// Global variables
var syncerSounds = {
    flag: {}, 
    currentTime: null, 
};

// Immediately invoked function expression (IIFE)
(function() {
    var setClass = 'sounds';  // Button class for audio elements
    var setDir = '/';  // Directory for audio files (e.g., '/sounds/')
    var setStopButtonId = 'stop-button-syncer';  // ID for stop button

    // Get all elements with the class 'sounds'
    var sounds = document.getElementsByClassName(setClass);
    console.log('Found ' + sounds.length + ' elements with the class "' + setClass + '"');  // Log how many elements were found

    // Add click event to all elements with the 'sounds' class
    for (var i = 0, l = sounds.length; i < l; i++) {
        sounds[i].onclick = function() {
            var file = this.getAttribute('data-file');  // Get the audio file name
            console.log('Button clicked, file: ' + file);  // Log which file is being played

            // Don't recreate the element if it already exists
            if (typeof(syncerSounds.flag[file]) === "undefined" || syncerSounds.flag[file] !== 1) {
                console.log('Creating audio element for file: ' + file);  // Log audio element creation
                var audio = document.createElement('audio');
                audio.id = file;

                // Check for MP3 support and set the source
                if (audio.canPlayType('audio/mp3')) {
                    audio.src = setDir + file + '.mp3';
                    console.log('MP3 format supported, using file: ' + setDir + file + '.mp3');
                }
                // Check for WAV support and set the source
                else if (audio.canPlayType('audio/wav')) {
                    audio.src = setDir + file + '.wav';
                    console.log('WAV format supported, using file: ' + setDir + file + '.wav');
                }
                // Fallback if neither MP3 nor WAV is supported
                else {
                    console.error('Audio format not supported: ' + file);
                    return;  // Exit if neither format is supported
                }

                // Append audio element to the body
                document.body.appendChild(audio);
                console.log('Audio element appended to body.');

                // Cleanup after the audio ends
                audio.onended = function() {
                    console.log('Audio ended for file: ' + file);
                    audio.parentNode.removeChild(audio);
                    syncerSounds.flag[file] = 0;  // Reset the flag to allow re-creation
                    console.log('Audio element removed and flag reset.');
                };
            }

            // Stop any currently playing audio
            stopCurrentSound();

            // Play the audio
            var currentAudio = document.getElementById(file);
            if (currentAudio) {
                currentAudio.play();
                console.log('Playing audio: ' + file);  // Log that the audio is being played
            }

            // Set the current audio as the last played sound
            syncerSounds.currentTime = file;

            // Mark the file as created and playing
            syncerSounds.flag[file] = 1;

            return false;  // Prevent default link behavior
        };
    }

    // Stop currently playing sound
    function stopCurrentSound() {
        var currentSound = document.getElementById(syncerSounds.currentTime);
        if (currentSound !== null) {
            console.log('Stopping current audio: ' + syncerSounds.currentTime);  // Log which audio is being stopped
            currentSound.pause();
            currentSound.currentTime = 0;
        }
    }

    // Stop button event listener (if you have a stop button)
    document.getElementById(setStopButtonId).onclick = function() {
        console.log('Stop button clicked.');
        stopCurrentSound();
        return false;
    };
})();
