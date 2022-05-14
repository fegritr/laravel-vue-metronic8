<template>
  <div
    v-if="isLoggedIn === true"
    id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height: 55px; --kt-toolbar-height-tablet-and-mobile: 55px"
  >
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div
          id="kt_aside"
          class="aside aside-light aside-hoverable"
          data-kt-drawer="true"
          data-kt-drawer-name="aside"
          data-kt-drawer-activate="{default: true, lg: false}"
          data-kt-drawer-overlay="true"
          data-kt-drawer-width="{default:'200px', '300px': '250px'}"
          data-kt-drawer-direction="start"
          data-kt-drawer-toggle="#kt_aside_mobile_toggle"
        >
          <!--begin::Brand-->
          <div class="aside-logo flex-column-auto" id="kt_aside_logo">
            <!--begin::Logo-->
            <a href="/">
              <img
                alt="Logo"
                src="assets/media/logos/logo-1-dark.svg"
                class="h-25px logo"
              />
            </a>
            <!--end::Logo-->
            <!--begin::Aside toggler-->
            <div
              id="kt_aside_toggle"
              class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
              data-kt-toggle="true"
              data-kt-toggle-state="active"
              data-kt-toggle-target="#kt_body"
              data-kt-toggle-name="aside-minimize"
            >
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
              <span class="svg-icon svg-icon-1 rotate-180">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    opacity="0.5"
                    d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                    fill="currentColor"
                  />
                  <path
                    d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                    fill="currentColor"
                  />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Aside toggler-->
          </div>
          <!--end::Brand-->
          <!--begin::Aside menu-->
          <div class="aside-menu flex-column-fluid">
            <!--begin::Aside Menu-->
            <div
              class="hover-scroll-overlay-y my-5 my-lg-5"
              id="kt_aside_menu_wrapper"
              data-kt-scroll="true"
              data-kt-scroll-activate="{default: false, lg: true}"
              data-kt-scroll-height="auto"
              data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
              data-kt-scroll-wrappers="#kt_aside_menu"
              data-kt-scroll-offset="0"
            >
              <!--begin::Menu-->
              <div
                class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu"
                data-kt-menu="true"
                data-kt-menu-expand="false"
              >
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item here show menu-accordion"
                >
                  <span class="menu-link">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <rect
                            x="2"
                            y="2"
                            width="9"
                            height="9"
                            rx="2"
                            fill="currentColor"
                          />
                          <rect
                            opacity="0.3"
                            x="13"
                            y="2"
                            width="9"
                            height="9"
                            rx="2"
                            fill="currentColor"
                          />
                          <rect
                            opacity="0.3"
                            x="13"
                            y="13"
                            width="9"
                            height="9"
                            rx="2"
                            fill="currentColor"
                          />
                          <rect
                            opacity="0.3"
                            x="2"
                            y="13"
                            width="9"
                            height="9"
                            rx="2"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Dashboards</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                      <router-link
                        to="/dashboard"
                        class="menu-link"
                        :class="{ active: menuActive == 'Dashboard' }"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title" v-on:click="setMenuActive('Dashboard')"
                          >Dashboards</span
                        >
                      </router-link>
                    </div>
                    <div class="menu-item">
                      <router-link
                        to="/register"
                        class="menu-link"
                        :class="{ active: menuActive == 'Register' }"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title" v-on:click="setMenuActive('Register')"
                          >Register</span
                        >
                      </router-link>
                    </div>
                    <div class="menu-item">
                      <router-link
                        to="/databuku"
                        class="menu-link"
                        :class="{ active: menuActive == 'Data Buku' }"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title" v-on:click="setMenuActive('Data Buku')"
                          >Data Buku</span
                        >
                      </router-link>
                    </div>
                  </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                  <span class="menu-link">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm001.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            opacity="0.3"
                            d="M18.041 22.041C18.5932 22.041 19.041 21.5932 19.041 21.041C19.041 20.4887 18.5932 20.041 18.041 20.041C17.4887 20.041 17.041 20.4887 17.041 21.041C17.041 21.5932 17.4887 22.041 18.041 22.041Z"
                            fill="currentColor"
                          />
                          <path
                            opacity="0.3"
                            d="M6.04095 22.041C6.59324 22.041 7.04095 21.5932 7.04095 21.041C7.04095 20.4887 6.59324 20.041 6.04095 20.041C5.48867 20.041 5.04095 20.4887 5.04095 21.041C5.04095 21.5932 5.48867 22.041 6.04095 22.041Z"
                            fill="currentColor"
                          />
                          <path
                            opacity="0.3"
                            d="M7.04095 16.041L19.1409 15.1409C19.7409 15.1409 20.141 14.7409 20.341 14.1409L21.7409 8.34094C21.9409 7.64094 21.4409 7.04095 20.7409 7.04095H5.44095L7.04095 16.041Z"
                            fill="currentColor"
                          />
                          <path
                            d="M19.041 20.041H5.04096C4.74096 20.041 4.34095 19.841 4.14095 19.541C3.94095 19.241 3.94095 18.841 4.14095 18.541L6.04096 14.841L4.14095 4.64095L2.54096 3.84096C2.04096 3.64096 1.84095 3.04097 2.14095 2.54097C2.34095 2.04097 2.94096 1.84095 3.44096 2.14095L5.44096 3.14095C5.74096 3.24095 5.94096 3.54096 5.94096 3.84096L7.94096 14.841C7.94096 15.041 7.94095 15.241 7.84095 15.441L6.54096 18.041H19.041C19.641 18.041 20.041 18.441 20.041 19.041C20.041 19.641 19.641 20.041 19.041 20.041Z"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Items</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                      <router-link to="/" class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">All Items</span>
                      </router-link>
                    </div>
                    <div class="menu-item">
                      <router-link to="/" class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Categories</span>
                      </router-link>
                    </div>
                    <div class="menu-item">
                      <router-link to="/" class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Modifiers</span>
                      </router-link>
                    </div>
                    <div class="menu-item">
                      <router-link to="/" class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Discounts</span>
                      </router-link>
                    </div>
                  </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                  <span class="menu-link">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
                            fill="currentColor"
                          />
                          <path
                            d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
                            fill="currentColor"
                          />
                          <path
                            opacity="0.3"
                            d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Book Testing</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                      <router-link to="/books" class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Books</span>
                      </router-link>
                    </div>
                    <div class="menu-item">
                      <router-link to="/category" class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Category</span>
                      </router-link>
                    </div>
                  </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                  <span class="menu-link">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
                            fill="currentColor"
                          />
                          <path
                            d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
                            fill="currentColor"
                          />
                          <path
                            opacity="0.3"
                            d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Master Data</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                      <router-link to="/" class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Departemen</span>
                      </router-link>
                    </div>
                  </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                  <span class="menu-link">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
                            fill="currentColor"
                          />
                          <path
                            d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
                            fill="currentColor"
                          />
                          <path
                            opacity="0.3"
                            d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Settings</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                      <router-link to="/" class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Departemen</span>
                      </router-link>
                    </div>
                  </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                  <span class="menu-link">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            opacity="0.3"
                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                            fill="currentColor"
                          />
                          <path
                            d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">User Management</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                      <router-link to="/" class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Users</span>
                      </router-link>
                    </div>
                    <div class="menu-item">
                      <router-link to="/" class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">User Category</span>
                      </router-link>
                    </div>
                    <div class="menu-item">
                      <router-link to="/" class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Roles</span>
                      </router-link>
                    </div>
                  </div>
                </div>
              </div>
              <!--end::Menu-->
            </div>
            <!--end::Aside Menu-->
          </div>
          <!--end::Aside menu-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
          <!--begin::Header-->
          <div id="kt_header" style="" class="header align-items-stretch">
            <!--begin::Container-->
            <div
              class="container-fluid d-flex align-items-stretch justify-content-between"
            >
              <!--begin::Aside mobile toggle-->
              <div
                class="d-flex align-items-center d-lg-none ms-n2 me-2"
                title="Show aside menu"
              >
                <div
                  class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                  id="kt_aside_mobile_toggle"
                >
                  <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                  <span class="svg-icon svg-icon-1">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                        fill="currentColor"
                      />
                      <path
                        opacity="0.3"
                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                        fill="currentColor"
                      />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
              </div>
              <!--end::Aside mobile toggle-->
              <!--begin::Mobile logo-->
              <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                <a href="/" class="d-lg-none">
                  <img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-30px" />
                </a>
              </div>
              <!--end::Mobile logo-->
              <!--begin::Wrapper-->
              <div
                class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
              >
                <!--begin::Navbar-->
                <div class="d-flex align-items-stretch" id="kt_header_nav"></div>
                <!--end::Navbar-->
                <!--begin::Toolbar wrapper-->
                <div class="d-flex align-items-stretch flex-shrink-0">
                  <!--begin::User menu-->
                  <div
                    class="d-flex align-items-center ms-1 ms-lg-3"
                    id="kt_header_user_menu_toggle"
                  >
                    <div class="m-5">
                      <div class="text-muted fw-bold fs-7">{{ timeNow }}</div>
                    </div>
                    <!--begin::Menu wrapper-->
                    <div
                      class="cursor-pointer symbol symbol-30px symbol-md-40px"
                      data-kt-menu-trigger="click"
                      data-kt-menu-attach="parent"
                      data-kt-menu-placement="bottom-end"
                    >
                      <img src="assets/media/avatars/300-1.jpg" alt="user" />
                    </div>
                    <div class="ms-5">
                      <div class="fw-bolder d-flex align-items-center fs-5">
                        Fegreit Rizda Wibowo
                      </div>
                      <div class="text-muted fw-bold fs-7">Tim Transformasi Digital</div>
                    </div>

                    <!--begin::User account menu-->
                    <div
                      class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                      data-kt-menu="true"
                    >
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                          <!--begin::Avatar-->
                          <div class="symbol symbol-50px me-5">
                            <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                          </div>

                          <!--end::Avatar-->
                          <!--begin::Username-->
                          <div class="d-flex flex-column">
                            <div class="fw-bolder d-flex align-items-center fs-5">
                              Max Smith
                              <span
                                class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"
                                >Pro</span
                              >
                            </div>
                            <a href="#" class="fw-bold text-muted text-hover-primary fs-7"
                              >max@kt.com</a
                            >
                          </div>
                          <!--end::Username-->
                        </div>
                      </div>

                      <!--end::Menu item-->
                      <!--begin::Menu separator-->
                      <div class="separator my-2"></div>
                      <!--end::Menu separator-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5">
                        <a
                          href="../../demo1/dist/account/overview.html"
                          class="menu-link px-5"
                          >My Profile</a
                        >
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5">
                        <a
                          href="../../demo1/dist/apps/projects/list.html"
                          class="menu-link px-5"
                        >
                          <span class="menu-text">My Projects</span>
                          <span class="menu-badge">
                            <span
                              class="badge badge-light-danger badge-circle fw-bolder fs-7"
                              >3</span
                            >
                          </span>
                        </a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div
                        class="menu-item px-5"
                        data-kt-menu-trigger="hover"
                        data-kt-menu-placement="left-start"
                      >
                        <a href="#" class="menu-link px-5">
                          <span class="menu-title">My Subscription</span>
                          <span class="menu-arrow"></span>
                        </a>
                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="../../demo1/dist/account/referrals.html"
                              class="menu-link px-5"
                              >Referrals</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="../../demo1/dist/account/billing.html"
                              class="menu-link px-5"
                              >Billing</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="../../demo1/dist/account/statements.html"
                              class="menu-link px-5"
                              >Payments</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu separator-->
                          <div class="separator my-2"></div>
                          <!--end::Menu separator-->
                        </div>
                        <!--end::Menu sub-->
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu separator-->
                      <div class="separator my-2"></div>
                      <!--end::Menu separator-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5 my-1">
                        <a
                          href="../../demo1/dist/account/settings.html"
                          class="menu-link px-5"
                          >Account Settings</a
                        >
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5">
                        <a class="menu-link px-5" @click="logout">Sign Out</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu separator-->
                      <div class="separator my-2"></div>
                      <!--end::Menu separator-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                  </div>
                  <!--end::User menu-->
                  <!--begin::Header menu toggle-->
                  <div
                    class="d-flex align-items-center d-lg-none ms-2 me-n3"
                    title="Show header menu"
                  >
                    <div
                      class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                      id="kt_header_menu_mobile_toggle"
                    >
                      <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                      <span class="svg-icon svg-icon-1">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                            fill="currentColor"
                          />
                          <path
                            opacity="0.3"
                            d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </div>
                  </div>
                  <!--end::Header menu toggle-->
                </div>
                <!--end::Toolbar wrapper-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Header-->
          <!--begin::Content-->
          <div class="content d-flex flex-column flex-column-fluid p-10" id="kt_content">
            <router-view />
          </div>
          <!--end::Content-->
          <!--begin::Footer-->
          <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
            <!--begin::Container-->
            <div
              class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between"
            >
              <!--begin::Copyright-->
              <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-bold me-1">2022©</span>
                <a
                  href="https://keenthemes.com"
                  target="_blank"
                  class="text-gray-800 text-hover-primary"
                  >Keenthemes</a
                >
              </div>
              <!--end::Copyright-->
              <!--begin::Menu-->
              <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                <li class="menu-item">
                  <a href="https://keenthemes.com" target="_blank" class="menu-link px-2"
                    >About</a
                  >
                </li>
                <li class="menu-item">
                  <a
                    href="https://devs.keenthemes.com"
                    target="_blank"
                    class="menu-link px-2"
                    >Support</a
                  >
                </li>
                <li class="menu-item">
                  <a
                    href="https://1.envato.market/EA4JP"
                    target="_blank"
                    class="menu-link px-2"
                    >Purchase</a
                  >
                </li>
              </ul>
              <!--end::Menu-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
      <span class="svg-icon">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
        >
          <rect
            opacity="0.5"
            x="13"
            y="6"
            width="13"
            height="2"
            rx="1"
            transform="rotate(90 13 6)"
            fill="currentColor"
          />
          <path
            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
            fill="currentColor"
          />
        </svg>
      </span>
      <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
  </div>
  <div v-else id="kt_body" class="bg-body p-30">
    <PLogin></PLogin>
  </div>
</template>

<script>
import PLogin from "./pages/Login.vue";
import moment from "moment";
// const date = new Date();
export default {
  name: "App",
  components: {
    PLogin,
  },
  data() {
    return {
      login: [],
      isLoggedIn: false,
      active_el: 0,
      dateTime: {
        hours: "",
        minutes: "",
        seconds: "",
      },
      menuActive: "",
      timeNow: moment().format("DD MMM YYYY, HH:mm"),
    };
  },
  created() {
    if (window.Laravel.isLoggedin) {
      (this.isLoggedIn = true), (this.login = window.Laravel.user);
    }
    setInterval(
      function () {
        this.timeNow = moment().format("DD MMM YYYY, HH:mm");
      }.bind(this),
      1000
    );
  },
  mounted() {},

  methods: {
    getLogoPhoto() {
      return "/img/logo.png";
    },
    getProfilePhoto() {
      return "/img/logo.png";
    },
    getLoginBg() {
      return "/img/login-bg.jpg";
    },
    activate: function (el) {
      this.active_el = el;
    },
    setDateTime() {
      const date = new Date();
      const weekday = new Array(
        "Minggu",
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jumat",
        "Sabtu"
      );
      const months = new Array(
        "Januari",
        "Febuari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Augustus",
        "September",
        "Ocktober",
        "November",
        "Desember"
      );
      this.dateTime = {
        dayOfWeek: weekday[date.getDay()],
        dayOfMonth: date.getDate(),
        curMonth: months[date.getMonth()],
        curyear: date.getFullYear(),
        hours: date.getHours(),
        minutes: date.getMinutes(),
        seconds: date.getSeconds(),
      };
    },
    setMenuActive(menu) {
      this.menuActive = menu;
      console.log(menu);
    },
    logout() {
      this.$axios.get("/sanctum/csrf-cookie").then((response) => {
        this.$axios
          .post("/api/logout")
          .then((response) => {
            console.log(response.data);
            if (response.data.success) {
              window.location.href = "/login";
            } else {
              this.error = response.data.message;
            }
          })
          .catch(function (error) {
            console.error(error);
          });
      });
    },
  },
  beforeMount() {
    this.timer = setInterval(this.setDateTime, 1000);
  },
  beforeUnmount() {
    clearInterval(this.timer);
  },
};
</script>
