@include('layouts.layout')
<div class="zerogrid">
    <div class="comments-are">
        <div id="comment">
            <h3>Leave a Reply</h3>
            <span>Your email address will not be published. Required fields are marked </span>
            <form method="post" action="/reviews">
                {{csrf_field()}}
                <label>
                    <span>Comment:</span>
                    <textarea name="message" pattern="^[A-Za-zА-Яа-яЁё\s]+$" id="message"></textarea>
                </label>
                <label>
                    <span>Name:</span>
                    <input type="text" name="name" id="name" required>
                </label>
                <label>
                    <span>Email:</span>
                    <input type="email" name="email" id="email" required>
                </label>
                <center><input class="sendButton" type="submit" name="submitcomment"
                               value="Submit"></center>
            </form>
        </div>
    </div>
</div>