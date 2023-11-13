<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> <?= $data['judul']; ?></title>
  </head>
  <body>
  <nav class="bg-blue-700 border-gray-200 px-6 py-4 ">
      <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
      
        <a class="flex items-center">
          <span class="self-center text-xl sm:text-3xl font-bold whitespace-nowrap text-white ">mentorme.</span>
        </a>
       
        <div class="md:hidden justify-center ml-28 sm:ml-28 flex items-center">
          <button
            onClick={toggleDropdown}
            data-collapse-toggle="mobile-menu-2"
            type="button"
            class="inline-flex ml-10 p-2 text-sm rounded-lg lg:hidden bg-gray-100 focus:outline-none focus:ring-2 focus:ring-white  "
            aria-controls="mobile-menu-2"
            aria-expanded="false"
          >
            <span class="sr-only">Buka main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </button>
        </div>
        <div class="justify-between items-center" id="mobile-menu-2">
          <ul class="hidden items-center md:flex flex-col md:flex-row font-medium lg:flex-row lg:space-x-8 lg:mt-0">
         
            <li>
              <a
                href="<?= BASEURL ?>" class="block p-2 text-white  border-gray-100 rounded-md hover:bg-gray-50 lg:hover:bg-white lg:border-0 lg:hover:text-blue-700 lg:p-2  "
                aria-current="page"
              >
                Beranda
              </a>
            </li>
            
         
            <li>
              <a
                href="about"
                class="block p-2 text-white  border-gray-100 rounded-md hover:bg-gray-50 lg:hover:bg-white lg:border-0 lg:hover:text-blue-700 lg:p-2 "
              >
                Tentang Kami
              </a>
            </li>
            
            <li>
              <a
                href="jadwal"
                class="block p-2 text-white border-gray-100 rounded-md hover:bg-gray-50 lg:hover:bg-white lg:border-0 lg:hover:text-blue-700 lg:p-2  "
              >
                Jadwal
              </a>
            </li>
            
            <li>
              <a
                href="mentoring"
                class="block p-2 mr-8 text-white  border-gray-100 rounded-md hover:bg-gray-50 lg:hover:bg-white lg:border-0 lg:hover:text-blue-700 lg:p-2  "
              >
                Cari Mentor
              </a>
            </li>
           
            <li>
              <a href="login" class="hidden hover:text-blue-700 mt-1 text-white md:block  hover:bg-gray-50 focus:ring-4 transition hover:scale-[106%] focus:ring-gray-300 font-medium ml-16 rounded-lg text-sm px-5 pl-5 py-1  focus:outline-none  border-gray-300  border-solid-2 border">
                Login
              </a>
            </li>
           
            <li>
              <a href="register" class="text-blue-700 hidden md:block mt-2 bg-white hover:bg-white focus:ring-4 transition hover:scale-[103%] focus:ring-gray-300 hover:text-blue-700 font-medium rounded-lg text-sm px-5 py-1.5 mb-2 mr-2  focus:outline-none ">
                Mulai Sekarang
              </a>
            </li>
            </Link>
          </ul>
        </div>
      </div>
      <!-- {isDropdownOpen && ( -->
        <ul class=" text-white md:hidden flex flex-col p-5 list-none ml-3">
          <li class="mb-5" >
            <Link to="/">Beranda</Link>
          </li>
          <li class="mb-5" >
            <Link to="/about">Tentang Kami</Link>
          </li>
          <li class="mb-5" >
            <Link to="/jadwal">Jadwal</Link>
          </li>
          <li class="mb-5" >
            <Link to="/mentoring">Cari Mentor</Link>
          </li>
          <li>
            <button class="text-white border px-4 bg-blue-700 rounded-md">
              <Link to="/login">Login</Link>
            </button>
          </li>
        </ul>
      <!-- )} -->
    </nav>

