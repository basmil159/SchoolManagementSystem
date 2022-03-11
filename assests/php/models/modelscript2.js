                // When the user clicks on <span> (x), close the modal by changing .model style  display:block to display:none on css 
			  span.onclick = function() {
			    modal.style.display = "none";
			  }

			  // When the user clicks the button, open the modal by changing .model style  display:none to display:block on css 
			  btnheader.onclick = function() {
			    modal.style.display = "block";
                modelTextBox2.style.display = "none";
                modelTextBox3.style.display = "none";
                modelTextBox1.style.display = "none";
			    headerText.style.display = "block";
                
              }
              btnbox1.onclick = function() {
                modal.style.display = "block";
                modelTextBox1.style.display = "block";
                modelTextBox2.style.display = "none";
                modelTextBox3.style.display = "none";
                headerText.style.display = "none";
                
              }
              btnbox2.onclick = function() {
                modal.style.display = "block";
                modelTextBox2.style.display = "block";
                modelTextBox1.style.display = "none";
                modelTextBox3.style.display = "none";
                headerText.style.display = "none";
                
              }
              btnbox3.onclick = function() {
                modal.style.display = "block";
                modelTextBox2.style.display = "none";
                modelTextBox1.style.display = "none";
                headerText.style.display = "none";
                modelTextBox3.style.display = "block";
                
              }
          </script>