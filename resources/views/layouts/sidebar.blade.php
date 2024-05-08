      <!-- ===== Sidebar Start ===== -->
      <aside
        :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
        class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
        @click.outside="sidebarToggle = false"
      >
        <!-- SIDEBAR HEADER -->
        <div
          class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5"
        >
          <a href="index.html">
            <img src="{{asset('assets/images/logo/logo.svg')}}" alt="Logo" />
          </a>

          <button
            class="block lg:hidden"
            @click.stop="sidebarToggle = !sidebarToggle"
          >
            <svg
              class="fill-current"
              width="20"
              height="18"
              viewBox="0 0 20 18"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                fill=""
              />
            </svg>
          </button>
        </div>
        <!-- SIDEBAR HEADER -->

        <div
          class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear"
        >
          <!-- Sidebar Menu -->
          <nav
            class="mt-5 px-4 py-4 lg:mt-9 lg:px-6"
            x-data="{selected: $persist('Dashboard')}"
          >
            <!-- Menu Group -->
            <div>
              <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

              <ul class="mb-6 flex flex-col gap-1.5">
                <!-- Menu Item Profile -->
                  <li>
                    <a
                      class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                      href="/add/Student"
                      @click="selected = (selected === 'Profile' ? '':'Profile')"
                      :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Profile') && (page === 'profile') }"
                      :class="page === 'profile' && 'bg-graydark'"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                      </svg>                                           
                      Add Student
                    </a>
                  </li>
                  <!-- Menu Item Profile -->
                <!-- Menu Item Profile -->
                  <li>
                    <a
                      class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                      href="add/employee"
                      @click="selected = (selected === 'Profile' ? '':'Profile')"
                      :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Profile') && (page === 'profile') }"
                      :class="page === 'profile' && 'bg-graydark'"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                      </svg>
  
                      Add Employee
                    </a>
                  </li>
                  <!-- Menu Item Profile -->
                <!-- Menu Item Profile -->
                  <li>
                    <a
                      class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                      href="student/details"
                      @click="selected = (selected === 'Profile' ? '':'Profile')"
                      :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Profile') && (page === 'profile') }"
                      :class="page === 'profile' && 'bg-graydark'"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                      </svg>                      
                      Student Details
                    </a>
                  </li>
                  <!-- Menu Item Profile -->
                <!-- Menu Item Profile -->
                  <li>
                    <a
                      class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                      href="employee/details"
                      @click="selected = (selected === 'Profile' ? '':'Profile')"
                      :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Profile') && (page === 'profile') }"
                      :class="page === 'profile' && 'bg-graydark'"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                      </svg>  
                      Employee Details
                    </a>
                  </li>
                  <!-- Menu Item Profile -->
              
             </ul>
            </div>
          </nav>
          <!-- Sidebar Menu -->

          <!-- Promo Box -->
          <div
            class="mx-auto mb-10 w-full max-w-60 rounded-sm border border-strokedark bg-boxdark px-4 py-6 text-center shadow-default"
          >
            <h3 class="mb-1 font-semibold text-white">School Managment</h3>
            <p class="mb-4 text-xs">300+ Features</p>
            <a
              href="https://tailadmin.com/pricing"
              target="_blank"
              rel="nofollow"
              class="flex items-center justify-center rounded-md bg-primary p-2 text-white hover:bg-opacity-95"
            >
              Purchase Now
            </a>
          </div>
          <!-- Promo Box -->
        </div>
      </aside>

      <!-- ===== Sidebar End ===== -->