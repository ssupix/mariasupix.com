<pre><code class="language-javascript">
    // FAQ DROPDOWN ACCORDION

    // Get all the questions
    let question = document.querySelectorAll(".question");

    // Loop through each question
    question.forEach(question => {
        // Add an event listener to each question
        question.addEventListener("click", event => {
            // Get the currently active question
            const active = document.querySelector(".question.active");
            
            // If there's already an active question and it's not the current question
            if(active && active !== question ) {
                // Close the active question
                active.classList.toggle("active");
                active.nextElementSibling.style.maxHeight = 0;
            }
            
            // Toggle the active class on the current question
            question.classList.toggle("active");
            
            // Get the answer element of the current question
            const answer = question.nextElementSibling;
            
            // If the question is active, open the answer
            if(question.classList.contains("active")){
                answer.style.maxHeight = answer.scrollHeight + "px";
            } 
            // Otherwise, close the answer
            else {
                answer.style.maxHeight = 0;
            }
        })
    })
    
</code></pre>