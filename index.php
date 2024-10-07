<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/login.css">
  <title>Dashboard</title>
</head>

<body>
  <div class="flex h-screen bg-[#fbfbfe]">
    <aside class="w-80 hidden md:flex md:flex-col border m-4 mr-0 rounded-lg overflow-hidden">
      <p class='m-4 mb-12 font-bold text-2xl text-center text-[#00446b]'>NexFleet Dynamics</p>

      <div class="flex flex-col mr-4">
        <div class="flex relative my-1 cursor-pointer">
          <a class='flex relative my-1 w-full'>
            <span class='w-4 rounded-xl absolute -left-2 h-full bg-[#00446b]'>
            </span>
            <p class='ml-8 flex w-full p-1 rounded-xl font-semibold text-white bg-[#00446b]'>
              <span class="flex items-center gap-1 text-lg px-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
              </svg>
                Dashboard
              </span>
            </p>
          </a>
        </div>

        <div class='flex relative my-1 cursor-pointer'>
          <a class='ml-8 flex p-1 w-full rounded-xl text-[#008ee0] mr-4'>
            <span class='flex items-center gap-1 px-1'>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="icon icon-tabler icons-tabler-outline icon-tabler-chart-bar">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M3 13a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                  <path d="M15 9a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                  <path d="M9 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                  <path d="M4 20h14" />
                </svg>
              <p>Analytics</p>
            </span>
          </a>
        </div>
        <div class='flex relative my-1 cursor-pointer'>
          <a href="payroll.php" class='ml-8 flex p-1 w-full rounded-xl text-[#008ee0] mr-4'>
            <span class='flex items-center gap-1 px-1'>
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-paypal"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M10 13l2.5 0c2.5 0 5 -2.5 5 -5c0 -3 -1.9 -5 -5 -5h-5.5c-.5 0 -1 .5 -1 1l-2 14c0 .5 .5 1 1 1h2.8l1.2 -5c.1 -.6 .4 -1 1 -1zm7.5 -5.8c1.7 1 2.5 2.8 2.5 4.8c0 2.5 -2.5 4.5 -5 4.5h-2.6l-.6 3.6a1 1 0 0 1 -1 .8l-2.7 0a.5 .5 0 0 1 -.5 -.6l.2 -1.4" />
          </svg>
          <p>Paypal</p>
            </span>
          </a>
        </div>
        <div class='flex relative my-1 cursor-pointer'>
          <a href="log out.php" class='ml-8 flex p-1 w-full rounded-xl text-[#008ee0] mr-4'>
            <span class='flex items-center gap-1 px-1'>
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
        <path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
        <p>Logout</p>
            </span>
          </a>
        </div>
</aside>
    <div class='flex flex-col w-full h-screen overflow-y-scroll'>
      <nav
        class='md:sticky block md:w-auto top-4 z-10 bg-white-10/50 backdrop-blur-sm border border-gray-300 rounded-md m-4'>
        <div class="flex w-full">
          <div class="-me-2 flex items-center sm:hidden">
            <button
              class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            </button>
          </div>
          <div class="relative flex justify-between w-full">
            <div class="mx-4 my-4 font-medium text-3xl">Dashboard</div>
            <button type="button"
              class="inline-flex items-center px-3 py-2 font-medium transition ease-in-out duration-150">
              John Doe
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                class="icon icon-tabler icons-tabler-filled icon-tabler-caret-down">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M18 9c.852 0 1.297 .986 .783 1.623l-.076 .084l-6 6a1 1 0 0 1 -1.32 .083l-.094 -.083l-6 -6l-.083 -.094l-.054 -.077l-.054 -.096l-.017 -.036l-.027 -.067l-.032 -.108l-.01 -.053l-.01 -.06l-.004 -.057v-.118l.005 -.058l.009 -.06l.01 -.052l.032 -.108l.027 -.067l.07 -.132l.065 -.09l.073 -.081l.094 -.083l.077 -.054l.096 -.054l.036 -.017l.067 -.027l.108 -.032l.053 -.01l.06 -.01l.057 -.004l12.059 -.002z" />
              </svg>
            </button>
          </div>
        </div>
      </nav>
      <main class="bg-gray-100 p-4">
    <div class="max-w-7xl mx-auto bg-white p-4 rounded shadow">
        <div  class="flex justify-between items-center mb-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded flex items-center">
            <a href="add employee.php"><i class="fas fa-user-plus mr-2"></i> Add Employee Records
            </button> </a>
            <div class="flex items-center">
                <label for="entries" class="mr-2">Show</label>
                <select id="entries" class="border rounded p-1">
                    <option>10</option>
                </select>
                <span class="ml-2">entries</span>
            </div>
        </div>
        <h2 class="text-center text-xl font-semibold mb-4">Employee Records</h2>
        <div class="flex justify-between items-center mb-4">
            <div></div>
            <div class="flex items-center">
                <label for="search" class="mr-2">Search:</label>
                <input type="text" id="search" class="border rounded p-1">
            </div>
        </div>
        <table class="min-w-full bg-white border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border">Fullname</th>
                    <th class="py-2 px-4 border">Contact</th>
                    <th class="py-2 px-4 border">Email</th>
                    <th class="py-2 px-4 border">Gender</th>
                    <th class="py-2 px-4 border">Employee Type</th>
                    <th class="py-2 px-4 border">Department</th>
                    <th class="py-2 px-4 border">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border">Agnes Miller</td>
                    <td class="py-2 px-4 border">2450001695</td>
                    <td class="py-2 px-4 border">milleragnes@gmail.com</td>
                    <td class="py-2 px-4 border text-center"><i class="fas fa-female text-red-500"></i> F</td>
                    <td class="py-2 px-4 border"><span class="bg-green-500 text-white px-2 py-1 rounded">Casual</span></td>
                    <td class="py-2 px-4 border">Finance</td>
                    <td class="py-2 px-4 border text-center">
                    <div href="update.php" class="flex justify-between items-center mb-4">
                        <button href="" class="bg-yellow-500 text-white px-2 py-1 rounded"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" />
                      </svg></button>
                        <button href="" class="bg-red-500 text-white px-2 py-1 rounded"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M4 7l16 0" />
                          <path d="M10 11l0 6" />
                          <path d="M14 11l0 6" />
                          <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                          <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                      </svg></button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">Christen Miller</td>
                    <td class="py-2 px-4 border">5214570002</td>
                    <td class="py-2 px-4 border">christen@gmail.com</td>
                    <td class="py-2 px-4 border text-center"><i class="fas fa-female text-red-500"></i> F</td>
                    <td class="py-2 px-4 border"><span class="bg-green-500 text-white px-2 py-1 rounded">Casual</span></td>
                    <td class="py-2 px-4 border">Finance</td>
                    <td class="py-2 px-4 border text-center">
                    <button href="" class="bg-yellow-500 text-white px-2 py-1 rounded"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" />
                      </svg></button>
                        <button href="" class="bg-red-500 text-white px-2 py-1 rounded"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M4 7l16 0" />
                          <path d="M10 11l0 6" />
                          <path d="M14 11l0 6" />
                          <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                          <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                      </svg></button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">Ireen Payne</td>
                    <td class="py-2 px-4 border">1245875450</td>
                    <td class="py-2 px-4 border">payne@gmail.com</td>
                    <td class="py-2 px-4 border text-center"><i class="fas fa-male text-blue-500"></i> M</td>
                    <td class="py-2 px-4 border"><span class="bg-yellow-500 text-white px-2 py-1 rounded">Part-Time</span></td>
                    <td class="py-2 px-4 border">Finance</td>
                    <td class="py-2 px-4 border text-center">
                    <button href="" class="bg-yellow-500 text-white px-2 py-1 rounded"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" />
                      </svg></button>
                        <button href="" class="bg-red-500 text-white px-2 py-1 rounded"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M4 7l16 0" />
                          <path d="M10 11l0 6" />
                          <path d="M14 11l0 6" />
                          <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                          <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                      </svg></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="flex justify-between items-center mt-4">
            <div class="flex items-center">
            </div>
        </div>
    </div>
</body>
</html>
