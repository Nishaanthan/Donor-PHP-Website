    <button class="open-button" onclick="openForm()">Chat</button>

    <div class="chat-popup" id="myForm">
        <form class="form-container">
            <h2 style="color: #000;">Chat</h2>


            <iframe src="../chatbot.html" width="500px" height="500px" frameBorder="0"></iframe>

            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
    <script src="./script.js"></script>
