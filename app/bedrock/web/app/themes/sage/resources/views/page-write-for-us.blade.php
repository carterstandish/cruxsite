@include('sections.header')

<div class="flex justify-center items-center flex-col mt-28">
  <div class="w-1/2 ">
    <h2 class="text-3xl font-bold text-center text-[2rem]">WRITE FOR CRUX</h2>
    <p class="my-2 text-center">Crux is built by writers like you. Write one, two, or as many articles as you'd like. Build brand awareness or flex your achievements.</p>
  </div>



  <div class="bg-gray-100 p-5 rounded-5 mt-11 shadow-2xl">
    <form action="action_page.php">

      <label for="fname">Your Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name.." class="w-full p-2 border border-gray-300 rounded-md my-1">

      <label for="fname">Subject</label>
      <input type="text" id="fname" name="firstname" placeholder="Subject" class="w-full p-2 border border-gray-300 rounded-md my-1">

      <label for="subject">Description</label>
      <textarea id="subject" name="subject" placeholder="Summary of Contribution.." style="height:200px" class="w-full p-2 border border-gray-300 rounded-md my-1 resize-y"></textarea>

      <input type="submit" value="Submit" class="bg-cyan-600 text-white p-2 rounded-md cursor-pointer">

    </form>
  </div>
</div>

@include('sections.footer')
