<div class="flex justify-center items-center flex-col mt-28">
  <div class="w-1/2 ">
    <h2 class="text-3xl font-bold text-center text-[2rem]">WRITE FOR CRUX</h2>
    <p class="my-2 text-center">Crux is built by writers like you. Write one, two, or as many articles as you'd like. Build brand awareness or flex your achievements.</p>
  </div>

  <div class="bg-gray-100 p-5 rounded-5 mt-11 shadow-2xl">
    <form action="action_page.php">

      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name.." class="w-full p-2 border border-gray-300 rounded-md my-1">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name.." class="w-full p-2 border border-gray-300 rounded-md my-1">

      <label for="country">Country</label>
      <select id="country" name="country" class="w-full p-2 border border-gray-300 rounded-md my-1">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>

      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" class="w-full p-2 border border-gray-300 rounded-md my-1 resize-y"></textarea>

      <input type="submit" value="Submit" class="bg-cyan-600 text-white p-2 rounded-md cursor-pointer">

    </form>
  </div>
</div>
