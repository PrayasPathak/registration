<!-- <script src="https://cdn.tailwindcss.com"></script> -->

<link rel="stylesheet" href="./style.css">

<section class="bg-slate-50 min-w-full mb-3 p-3">
    <form action="#" class="flex flex-col gap-2 justify-center items-center text-slate-900 w-full">
        <h3 class="text-3xl text-center font-semibold">Contact Form</h3>
        <div class="flex flex-col m-1">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" class="bg-slate-300 rounded-md shadow-slate-300 outline-none h-10">
        </div>
        <div class="flex flex-col m-1">
            <label for="email">Email</label>
            <input type="email" id="email" class="bg-slate-300 rounded-md shadow-slate-300 outline-none h-10">
        </div>
        <button
            class="bg-blue-600 rounded-lg shadow-2xl shadow-slate-400 hover:bg-blue-800 hover:text-white p-1 w-44 h-10">Contact</button>
    </form>
</section>