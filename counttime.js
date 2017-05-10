
            var seconds = 7200;
            function timer() {
                var hours       = Math.floor(seconds/3600);
                var minutesLeft = Math.floor(seconds - (hours*3600));
                var minutes     = Math.floor(minutesLeft/60);
                var remainingSeconds = seconds % 60;
                if (remainingSeconds < 10) {
                    remainingSeconds = "0" + remainingSeconds; 
                }
				if (minutes < 10) {
                    minutes = "0" + minutes; 
                }
				
                document.getElementById('clock').innerHTML = hours + ":" + minutes + ":" + remainingSeconds;
                if (seconds == 0) {
                    clearInterval(countdownTimer);
                    document.getElementById('clock').innerHTML = "Finish!";
					document.getElementById('sumbit').click() ;
                } else {
                    seconds--;
                }
            }
            var countdownTimer = setInterval('timer()', 1000);
