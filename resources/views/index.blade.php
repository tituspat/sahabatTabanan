@extends('layouts.app-2')

@section('content')
    <div
        class="flex min-h-screen flex-col bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] font-mulish text-base font-normal text-gray antialiased dark:bg-[#101926] dark:from-transparent dark:to-transparent">
        @include('layouts.navbar-2')

        <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
            <!-- jumbotron -->
            <div class="overflow-hidden pt-[82px] sm:-mx-[250px] sm:rounded-b-[50%] lg:-mx-[150px] lg:pt-[106px]"
                style="background-image: url('img/pura.jpg'); background-repeat: no-repeat; background-size: cover;">
                <div class="relative">
                    <img src="{{ asset('vendor/plurk/images/banner-lefticon.png') }}" alt="banner-lefticon"
                        class="absolute left-0 top-20 sm:left-[250px] lg:left-[150px]" />
                    <img src="{{ asset('vendor/plurk/images/banner-rightIcon.png') }}" alt="banner-rightIcon"
                        class="absolute right-0 -top-4 sm:right-[250px] lg:right-[150px]" />
                    <div class="container">
                        <div
                            class="relative bg-[url(../images/world-map.png)] bg-cover bg-top bg-no-repeat pt-14 pb-0 lg:pt-20 lg:pb-60 xl:pt-36">
                            <div
                                class="relative z-[1] text-center text-white lg:w-3/5 ltr:lg:text-left rtl:lg:text-right xl:w-1/2">
                                <h2
                                    class="text-4xl font-extrabold leading-normal sm:text-5xl lg:text-[70px] lg:leading-[90px]">
                                    Bersama <span class="italic text-primary">Giri</span> <br><span class="text-5xl">Tabanan
                                        Makin Maju</span>
                                </h2>
                                <p class="my-8 text-lg lg:w-[90%]">
                                    Dari tangan pemimpin yang amanah dan jujur, saya yakin Tabanan akan lebih makmur dan
                                    bermartabat
                                </p>
                                <a href="/profil"
                                    class="btn mx-auto mt-2 block w-fit bg-white lg:mx-0 lg:rtl:ml-auto">Kenali Lebih
                                    Lagi</a>
                            </div>
                            <div class="bottom-0 mx-auto w-auto ltr:right-0 rtl:left-0 md:w-[540px] lg:absolute xl:w-[650px]"
                                data-aos="fade-left" data-aos-duration="1000">
                                <!-- <img src="{{ asset('vendor/plurk/images/home-banner-icon.svg') }}" alt="home-banner-icon" class="rtl:rotate-y-180" /> -->
                                <img src="{{ asset('img/calon.png') }}" alt="home-banner-icon"
                                    class="rtl:rotate-y-180"
                                    />

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section
                class="bg-[url(../images/service-bg.png)] bg-cover bg-center bg-no-repeat py-14 dark:bg-none lg:py-[100px]">
                <div class="container">
                    <div class="heading text-center">
                        {{-- <h6>High - Impact Services</h6> --}}
                        <h4>Program</h4>
                    </div>

                    <div class="grid grid-rows-2 gap-10">
                        
                        <div class="grid row-span-1">
                            @foreach($programUtama as $p)
                            {{-- <div class="grid gap-6 sm:grid-cols-6 lg:grid-cols-6"> --}}
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="group rounded-3xl border-2 border-white bg-white p-6 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:border-white/10 dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.04] dark:to-transparent dark:!shadow-none dark:hover:bg-secondary">
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="col-span-1 flex h-full w-full items-center justify-center bg-secondary shadow-[0px_15px_30px_rgba(180,118,229,0.4)] transition group-hover:bg-black rounded-2xl overflow-hidden" style="background-image: url('img/program/program-beras.jpg'); background-size: cover; background-position: center;">
                                        <!-- Konten lain di sini -->
                                    </div>

                                    <div class="col-span-1 w-full">
                                    <a href="services-detail.html"
                                        class="my-8 inline-block text-[22px] font-extrabold text-black dark:text-white dark:group-hover:text-black">{{$p->title}}</a>
                                    <p
                                        class="mb-10 text-lg font-semibold transition line-clamp-3 dark:group-hover:text-black">
                                        {{$p->description}}
                                    </p>
                                    <a href="services-detail.html"
                                        class="flex h-11 w-11 items-center justify-center rounded-full bg-[#F3F4F6] transition group-hover:bg-black rtl:rotate-180 dark:bg-gray-dark">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="text-black transition group-hover:text-white dark:text-white">
                                            <path
                                                d="M9.41083 14.4109L10.5892 15.5892L16.1783 10.0001L10.5892 4.41089L9.41083 5.58922L12.9883 9.16672H5V10.8334H12.9883L9.41083 14.4109Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                                </div>
                            </div>
                            @endforeach
                            </div>
                            {{-- </div> --}}
                        </div>

                        <div class="row-span-1 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            @foreach($program as $p)
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="group rounded-3xl border-2 border-white bg-white p-6 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:border-white/10 dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.04] dark:to-transparent dark:!shadow-none dark:hover:bg-secondary">
                                    <div
                                        class="flex h-14 w-14 items-center justify-center rounded-full bg-secondary shadow-[0px_15px_30px_rgba(180,118,229,0.4)] transition group-hover:bg-black">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5"
                                                d="M14.2371 18.7087L18.7103 14.2366L21.4893 17.0156V21.4888H17.0172L14.2371 18.7087ZM5.2917 9.76334L2.3092 6.7819C2.21118 6.68399 2.13342 6.56771 2.08036 6.43973C2.02731 6.31174 2 6.17455 2 6.03601C2 5.89746 2.02731 5.76027 2.08036 5.63229C2.13342 5.5043 2.21118 5.38803 2.3092 5.29012L5.2917 2.30867C5.4894 2.11103 5.75751 2 6.03706 2C6.31662 2 6.58472 2.11103 6.78242 2.30867L9.76598 5.29012L5.2917 9.76334Z"
                                                fill="white" />
                                            <path
                                                d="M5.29177 12.7459L7.21895 14.6742L8.71179 13.1813L6.78249 11.2552L8.27321 9.76449L10.2015 11.6917L11.6922 10.201L9.76605 8.27271L11.2568 6.78199L13.1818 8.71128L14.6736 7.2195L12.7454 5.29232L15.7279 2.31087C15.9256 2.11323 16.1937 2.0022 16.4732 2.0022C16.7528 2.0022 17.0209 2.11323 17.2186 2.31087L21.6908 6.78304C21.8884 6.98074 21.9994 7.24885 21.9994 7.5284C21.9994 7.80795 21.8884 8.07606 21.6908 8.27376L8.27321 21.6913C8.07551 21.889 7.8074 22 7.52785 22C7.2483 22 6.98019 21.889 6.78249 21.6913L2.31032 17.2192C2.11268 17.0215 2.00165 16.7533 2.00165 16.4738C2.00165 16.1942 2.11268 15.9261 2.31032 15.7284L5.29177 12.7459Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <a href="services-detail.html"
                                        class="my-8 inline-block text-[22px] font-extrabold text-black dark:text-white dark:group-hover:text-black">{{$p->title}}</a>
                                    <p
                                        class="mb-10 text-lg font-semibold transition line-clamp-3 dark:group-hover:text-black">
                                        {{$p->description}}

                                    </p>
                                    <a href="services-detail.html"
                                        class="flex h-11 w-11 items-center justify-center rounded-full bg-[#F3F4F6] transition group-hover:bg-black rtl:rotate-180 dark:bg-gray-dark">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="text-black transition group-hover:text-white dark:text-white">
                                            <path
                                                d="M9.41083 14.4109L10.5892 15.5892L16.1783 10.0001L10.5892 4.41089L9.41083 5.58922L12.9883 9.16672H5V10.8334H12.9883L9.41083 14.4109Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="group rounded-3xl border-2 border-white bg-white p-6 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:border-white/10 dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.04] dark:to-transparent dark:!shadow-none dark:hover:bg-secondary">
                                    <div
                                        class="flex h-14 w-14 items-center justify-center rounded-full bg-secondary shadow-[0px_15px_30px_rgba(180,118,229,0.4)] transition group-hover:bg-black">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5"
                                                d="M10.1658 20C10.5862 20 10.9617 19.7371 11.1054 19.342L15.8374 6.34204C16.0749 5.68981 15.5919 5 14.8978 5H13.8341C13.4137 5 13.0382 5.26292 12.8945 5.65796L8.16245 18.658C7.92504 19.3102 8.40804 20 9.10214 20H10.1658Z"
                                                fill="white" />
                                            <path
                                                d="M17.9889 17.0964C18.3794 17.4871 19.0127 17.4873 19.4034 17.0966L23.2929 13.2071C23.6834 12.8166 23.6834 12.1834 23.2929 11.7929L19.4036 7.90359C19.0129 7.51287 18.3793 7.5131 17.9889 7.90409L17.2814 8.61254C16.8913 9.00328 16.8916 9.63632 17.2823 10.0266L19.0501 11.7927C19.441 12.1832 19.441 12.8168 19.0502 13.2074L17.2822 14.9746C16.8916 15.365 16.8914 15.9981 17.2818 16.3888L17.9889 17.0964ZM4.94994 13.2073C4.55904 12.8167 4.55896 12.1832 4.94977 11.7925L6.71781 10.0253C7.10839 9.63494 7.10858 9.00184 6.71823 8.61121L6.01111 7.90359C5.62062 7.51283 4.98726 7.51272 4.59664 7.90334L0.707106 11.7929C0.316582 12.1834 0.316582 12.8166 0.707107 13.2071L4.59639 17.0964C4.98711 17.4871 5.62066 17.4869 6.01111 17.0959L6.71856 16.3874C7.10874 15.9967 7.10837 15.3637 6.71773 14.9734L4.94994 13.2073Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <a href="services-detail.html"
                                        class="my-8 inline-block text-[22px] font-extrabold text-black dark:text-white dark:group-hover:text-black">KELAPA KOPYOR GENJAH EXOTIC</a>
                                    <p
                                        class="mb-10 text-lg font-semibold transition line-clamp-3 dark:group-hover:text-black">
                                        Budi daya kelapa kopyor dengan teknologi & inovasi genetika akan meningkatkan produktifitas buah kopyor mendekati 100% kopyor

                                    </p>
                                    <a href="services-detail.html"
                                        class="flex h-11 w-11 items-center justify-center rounded-full bg-[#F3F4F6] transition group-hover:bg-black rtl:rotate-180 dark:bg-gray-dark">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="text-black transition group-hover:text-white dark:text-white">
                                            <path
                                                d="M9.41083 14.4109L10.5892 15.5892L16.1783 10.0001L10.5892 4.41089L9.41083 5.58922L12.9883 9.16672H5V10.8334H12.9883L9.41083 14.4109Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="group rounded-3xl border-2 border-white bg-white p-6 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:border-white/10 dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.04] dark:to-transparent dark:!shadow-none dark:hover:bg-secondary">
                                    <div
                                        class="flex h-14 w-14 items-center justify-center rounded-full bg-secondary shadow-[0px_15px_30px_rgba(180,118,229,0.4)] transition group-hover:bg-black">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5"
                                                d="M6.21053 20H3.05263C2.77346 20 2.50572 19.8891 2.30831 19.6917C2.1109 19.4943 2 19.2265 2 18.9474V10.5263C2 10.2471 2.1109 9.97941 2.30831 9.782C2.50572 9.58459 2.77346 9.47369 3.05263 9.47369H6.21053C6.4897 9.47369 6.75744 9.58459 6.95485 9.782C7.15226 9.97941 7.26316 10.2471 7.26316 10.5263V18.9474C7.26316 19.2265 7.15226 19.4943 6.95485 19.6917C6.75744 19.8891 6.4897 20 6.21053 20ZM20.9474 20H17.7895C17.5103 20 17.2426 19.8891 17.0452 19.6917C16.8477 19.4943 16.7368 19.2265 16.7368 18.9474V7.36843C16.7368 7.08925 16.8477 6.82151 17.0452 6.6241C17.2426 6.4267 17.5103 6.3158 17.7895 6.3158H20.9474C21.2265 6.3158 21.4943 6.4267 21.6917 6.6241C21.8891 6.82151 22 7.08925 22 7.36843V18.9474C22 19.2265 21.8891 19.4943 21.6917 19.6917C21.4943 19.8891 21.2265 20 20.9474 20Z"
                                                fill="white" />
                                            <path
                                                d="M13.5789 20H10.421C10.1419 20 9.87412 19.8891 9.67672 19.6917C9.47931 19.4943 9.36841 19.2265 9.36841 18.9474V1.05263C9.36841 0.773456 9.47931 0.505715 9.67672 0.308309C9.87412 0.110902 10.1419 0 10.421 0H13.5789C13.8581 0 14.1259 0.110902 14.3233 0.308309C14.5207 0.505715 14.6316 0.773456 14.6316 1.05263V18.9474C14.6316 19.2265 14.5207 19.4943 14.3233 19.6917C14.1259 19.8891 13.8581 20 13.5789 20Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <a href="services-detail.html"
                                        class="my-8 inline-block text-[22px] font-extrabold text-black dark:text-white dark:group-hover:text-black">PEMBUATAN PAKAN TERNAK SAPI & PUPUK ORGANIK</a>
                                    <p
                                        class="mb-10 text-lg font-semibold transition line-clamp-3 dark:group-hover:text-black">
                                        Melalui Permentan no.70/Permentan/SR.140/10/2011, telah ditetapkan standar pupuk organik. Untuk bisa menghasilkan pupuk organik sesuai standar, maka pembuatan pupuk organiknya mengikuti cara pembuatan pupuk organik yang benar.                                    </p>
                                    <a href="services-detail.html"
                                        class="flex h-11 w-11 items-center justify-center rounded-full bg-[#F3F4F6] transition group-hover:bg-black rtl:rotate-180 dark:bg-gray-dark">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="text-black transition group-hover:text-white dark:text-white">
                                            <path
                                                d="M9.41083 14.4109L10.5892 15.5892L16.1783 10.0001L10.5892 4.41089L9.41083 5.58922L12.9883 9.16672H5V10.8334H12.9883L9.41083 14.4109Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>
            {{--
            <section class="py-14 dark:!bg-none lg:py-[100px]"
                style="background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #ffffff 54.69%)">
                <div class="container">
                    <div class="heading text-center">
                        <h6>Company Facts</h6>
                        <h4>We are proud of our team</h4>
                    </div>
                    <div class="grid gap-[30px] sm:grid-cols-2 lg:grid-cols-4">
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="group flex cursor-pointer items-baseline rounded-3xl border border-white bg-white py-8 px-6 transition duration-500 hover:border-secondary hover:bg-secondary/10 dark:border-transparent dark:bg-gray-dark dark:hover:bg-secondary">
                                <div>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-secondary transition dark:group-hover:text-black">
                                        <g clip-path="url(#clip0_6_2530)">
                                            <path opacity="0.3"
                                                d="M9.26505 23.1907C8.867 22.5979 9.34238 21.8701 10.0565 21.8701H15.3123C16.0264 21.8701 16.5018 22.5979 16.1038 23.1907C15.3466 24.3185 14.3 25.2316 13.0656 25.8283C12.8248 25.9448 12.544 25.9448 12.3032 25.8283C11.0688 25.2316 10.0222 24.3185 9.26505 23.1907Z"
                                                fill="currentColor" />
                                            <path
                                                d="M19.7602 15.3657C19.7602 15.6093 19.8491 15.8444 20.0102 16.0271L21.8688 18.1348C22.0299 18.3175 22.1188 18.5527 22.1188 18.7962V19.6908C22.1188 20.2431 21.6711 20.6908 21.1188 20.6908H4.25C3.69772 20.6908 3.25 20.2431 3.25 19.6908V18.7962C3.25 18.5527 3.33888 18.3175 3.49997 18.1348L5.35863 16.0271C5.51971 15.8444 5.6086 15.6093 5.6086 15.3657V8.89781C5.6086 4.89015 8.41975 1.46516 12.3859 0.0983C12.5792 0.0316815 12.7896 0.0316814 12.9829 0.0982998C16.949 1.46516 19.7602 4.89015 19.7602 8.89781V15.3657ZM12.6844 11.2564C13.3099 11.2564 13.9098 11.0079 14.3522 10.5656C14.7945 10.1233 15.043 9.52335 15.043 8.89781C15.043 8.27227 14.7945 7.67235 14.3522 7.23003C13.9098 6.78771 13.3099 6.53921 12.6844 6.53921C12.0589 6.53921 11.4589 6.78771 11.0166 7.23003C10.5743 7.67235 10.3258 8.27227 10.3258 8.89781C10.3258 9.52335 10.5743 10.1233 11.0166 10.5656C11.4589 11.0079 12.0589 11.2564 12.6844 11.2564Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6_2530">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="ltr:pl-4 rtl:pr-4">
                                    <h4 class="pb-2.5 text-4xl font-black leading-none transition dark:text-white dark:group-hover:text-black"
                                        data-vanilla-counter data-start-at="0" data-end-at="10" data-time="4000"
                                        data-delay="1000" data-format="{}+"></h4>
                                    <span
                                        class="font-bold text-black transition dark:text-gray dark:group-hover:text-black">Year
                                        in Business</span>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="group flex cursor-pointer items-baseline rounded-3xl border border-white bg-white py-8 px-6 transition duration-500 hover:border-secondary hover:bg-secondary/10 dark:border-transparent dark:bg-gray-dark dark:hover:bg-secondary">
                                <div>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-secondary transition dark:group-hover:text-black">
                                        <g clip-path="url(#clip0_6_2631)">
                                            <path opacity="0.3"
                                                d="M4.2757 15.6078C4.27493 15.6078 4.27425 15.6084 4.27403 15.6091C4.06737 16.3065 3.94528 17.0263 3.9104 17.7528L3.9 18.2V25C3.9 25.5523 3.45228 26 2.9 26H1C0.447715 26 1.18712e-07 25.5523 1.18712e-07 25V20.15C-0.000255849 19.0289 0.413437 17.9471 1.16173 17.1122C1.91001 16.2773 2.94021 15.7481 4.0547 15.626L4.2757 15.6078ZM22.0225 17.0047C21.9324 16.3161 22.4694 15.6613 23.1157 15.9157C23.7351 16.1595 24.299 16.5384 24.7632 17.0317C25.5575 17.8757 25.9998 18.991 26 20.15V25.0001C26 25.5523 25.5523 26 25 26H23.1C22.5477 26 22.1 25.5523 22.1 25V18.2C22.1 17.7948 22.0737 17.3958 22.0225 17.0047ZM4.55 7.80005C5.41195 7.80005 6.2386 8.14246 6.8481 8.75195C7.45759 9.36145 7.8 10.1881 7.8 11.05C7.8 11.912 7.45759 12.7387 6.8481 13.3481C6.2386 13.9576 5.41195 14.3 4.55 14.3C3.68805 14.3 2.8614 13.9576 2.2519 13.3481C1.64241 12.7387 1.3 11.912 1.3 11.05C1.3 10.1881 1.64241 9.36145 2.2519 8.75195C2.8614 8.14246 3.68805 7.80005 4.55 7.80005ZM21.45 7.80005C22.312 7.80005 23.1386 8.14246 23.7481 8.75195C24.3576 9.36145 24.7 10.1881 24.7 11.05C24.7 11.912 24.3576 12.7387 23.7481 13.3481C23.1386 13.9576 22.312 14.3 21.45 14.3C20.588 14.3 19.7614 13.9576 19.1519 13.3481C18.5424 12.7387 18.2 11.912 18.2 11.05C18.2 10.1881 18.5424 9.36145 19.1519 8.75195C19.7614 8.14246 20.588 7.80005 21.45 7.80005Z"
                                                fill="currentColor" />
                                            <path
                                                d="M13 11.7C14.7239 11.7 16.3772 12.3848 17.5962 13.6038C18.8152 14.8228 19.5 16.4761 19.5 18.2V25C19.5 25.5523 19.0523 26 18.5 26H7.5C6.94772 26 6.5 25.5523 6.5 25V18.2C6.5 16.4761 7.18482 14.8228 8.40381 13.6038C9.62279 12.3848 11.2761 11.7 13 11.7ZM13 0C14.3791 0 15.7018 0.547856 16.677 1.52304C17.6521 2.49823 18.2 3.82087 18.2 5.2C18.2 6.57913 17.6521 7.90177 16.677 8.87696C15.7018 9.85214 14.3791 10.4 13 10.4C11.6209 10.4 10.2982 9.85214 9.32304 8.87696C8.34786 7.90177 7.8 6.57913 7.8 5.2C7.8 3.82087 8.34786 2.49823 9.32304 1.52304C10.2982 0.547856 11.6209 0 13 0Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6_2631">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="ltr:pl-4 rtl:pr-4">
                                    <h4 class="pb-2.5 text-4xl font-black leading-none transition dark:text-white dark:group-hover:text-black"
                                        data-vanilla-counter data-start-at="0" data-end-at="120" data-time="4000"
                                        data-delay="1000" data-format="{}+"></h4>
                                    <span
                                        class="font-bold text-black transition dark:text-gray dark:group-hover:text-black">Team
                                        Members</span>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="group flex cursor-pointer items-baseline rounded-3xl border border-white bg-white py-8 px-6 transition duration-500 hover:border-secondary hover:bg-secondary/10 dark:border-transparent dark:bg-gray-dark dark:hover:bg-secondary">
                                <div>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-secondary transition dark:group-hover:text-black">
                                        <g clip-path="url(#clip0_6_2641)">
                                            <path opacity="0.3"
                                                d="M13 26C5.8201 26 0 20.1799 0 13C0 5.8201 5.8201 0 13 0C20.1799 0 26 5.8201 26 13C26 20.1799 20.1799 26 13 26Z"
                                                fill="currentColor" />
                                            <path
                                                d="M6.49998 14.3C6.49998 16.024 7.18479 17.6773 8.40378 18.8962C9.62277 20.1152 11.2761 20.8 13 20.8C14.7239 20.8 16.3772 20.1152 17.5962 18.8962C18.8152 17.6773 19.5 16.024 19.5 14.3H16.9C16.9 15.3344 16.4891 16.3264 15.7577 17.0578C15.0263 17.7892 14.0343 18.2 13 18.2C11.9656 18.2 10.9736 17.7892 10.2423 17.0578C9.51087 16.3264 9.09998 15.3344 9.09998 14.3H6.49998ZM7.79998 11.7C8.31715 11.7 8.81314 11.4946 9.17883 11.1289C9.54453 10.7632 9.74998 10.2672 9.74998 9.75005C9.74998 9.23288 9.54453 8.73689 9.17883 8.37119C8.81314 8.00549 8.31715 7.80005 7.79998 7.80005C7.2828 7.80005 6.78681 8.00549 6.42112 8.37119C6.05542 8.73689 5.84998 9.23288 5.84998 9.75005C5.84998 10.2672 6.05542 10.7632 6.42112 11.1289C6.78681 11.4946 7.2828 11.7 7.79998 11.7ZM18.2 11.7C18.7171 11.7 19.2131 11.4946 19.5788 11.1289C19.9445 10.7632 20.15 10.2672 20.15 9.75005C20.15 9.23288 19.9445 8.73689 19.5788 8.37119C19.2131 8.00549 18.7171 7.80005 18.2 7.80005C17.6828 7.80005 17.1868 8.00549 16.8211 8.37119C16.4554 8.73689 16.25 9.23288 16.25 9.75005C16.25 10.2672 16.4554 10.7632 16.8211 11.1289C17.1868 11.4946 17.6828 11.7 18.2 11.7Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6_2641">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="ltr:pl-4 rtl:pr-4">
                                    <h4 class="pb-2.5 text-4xl font-black leading-none transition dark:text-white dark:group-hover:text-black"
                                        data-vanilla-counter data-start-at="0" data-end-at="350" data-time="4000"
                                        data-delay="1000" data-format="{}+"></h4>
                                    <span
                                        class="font-bold text-black transition dark:text-gray dark:group-hover:text-black">Happy
                                        Clients</span>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="group flex cursor-pointer items-baseline rounded-3xl border border-white bg-white py-8 px-6 transition duration-500 hover:border-secondary hover:bg-secondary/10 dark:border-transparent dark:bg-gray-dark dark:hover:bg-secondary">
                                <div>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-secondary transition dark:group-hover:text-black">
                                        <g clip-path="url(#clip0_6_2651)">
                                            <path
                                                d="M1.31194 8.73474H24.6881C24.8695 8.73466 25.049 8.77223 25.2151 8.84507C25.3813 8.91791 25.5305 9.02444 25.6534 9.15792C25.7763 9.29141 25.8702 9.44894 25.929 9.62055C25.9879 9.79216 26.0105 9.97413 25.9955 10.1549L24.9018 23.2684C24.8745 23.5961 24.7251 23.9016 24.4832 24.1243C24.2413 24.347 23.9245 24.4708 23.5957 24.4709H2.40429C2.07547 24.4708 1.75871 24.347 1.5168 24.1243C1.27489 23.9016 1.12548 23.5961 1.09819 23.2684L0.00452488 10.1549C-0.010534 9.97413 0.0120899 9.79216 0.0709658 9.62055C0.129842 9.44894 0.223688 9.29141 0.346571 9.15792C0.469454 9.02444 0.618698 8.91791 0.784866 8.84507C0.951034 8.77223 1.13051 8.73466 1.31194 8.73474Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M14.5614 3.1965C14.7489 3.38404 15.0033 3.4894 15.2685 3.4894H23.4908C23.8386 3.4894 24.1722 3.62756 24.4181 3.87348C24.664 4.11941 24.8022 4.45296 24.8022 4.80075V5.1121C24.8022 5.66438 24.3545 6.1121 23.8022 6.1121H2.19788C1.64559 6.1121 1.19788 5.66438 1.19788 5.1121V2.17805C1.19788 1.83026 1.33604 1.49671 1.58196 1.25078C1.82789 1.00486 2.16143 0.866699 2.50923 0.866699H11.8174C12.0826 0.866699 12.3369 0.972056 12.5245 1.15959L14.5614 3.1965Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6_2651">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="ltr:pl-4 rtl:pr-4">
                                    <h4 class="pb-2.5 text-4xl font-black leading-none transition dark:text-white dark:group-hover:text-black"
                                        data-vanilla-counter data-start-at="0" data-end-at="1254" data-time="4000"
                                        data-delay="1000" data-format="{}+"></h4>
                                    <span
                                        class="font-bold text-black transition dark:text-gray dark:group-hover:text-black">Project
                                        Done</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
                {{-- <div
                    class="relative my-14 mx-auto border-[10px] border-transparent bg-black py-14 dark:border-black dark:bg-gray-dark lg:my-[100px] lg:py-[100px] xl:max-w-[1440px] xl:rounded-3xl">
                    <div class="container">
                        <div class="items-end gap-4 lg:flex xl:gap-0">
                            <div class="lg:w-1/2">
                                <div class="heading mb-16 text-center ltr:lg:text-left rtl:lg:text-right">
                                    <h6>What Makes us Different?</h6>
                                    <h4 class="leading-normal !text-white lg:!leading-[50px]">We bring solutions to make
                                        life easier for our customers.</h4>
                                </div>
                                <div class="grid gap-x-7 gap-y-12 sm:grid-cols-2" data-aos="fade-right"
                                    data-aos-duration="1000">
                                    <div class="flex transition">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_36_337)">
                                                    <path opacity="0.5"
                                                        d="M19.2867 23.9285V25.119C19.2867 25.7505 19.0358 26.3561 18.5893 26.8027C18.1427 27.2492 17.5371 27.5001 16.9056 27.5001H12.1435C11.512 27.5001 10.9063 27.2492 10.4598 26.8027C10.0133 26.3561 9.76239 25.7505 9.76239 25.119V23.9285H19.2867Z"
                                                        fill="#B476E5" />
                                                    <path
                                                        d="M9.69213 21.5473C9.33855 20.0318 7.74323 18.7924 7.08844 17.9757C5.96718 16.5748 5.26448 14.8857 5.06127 13.1028C4.85807 11.32 5.16263 9.51606 5.93988 7.89876C6.71712 6.28146 7.93542 4.91663 9.45445 3.96148C10.9735 3.00632 12.7314 2.49971 14.5258 2.5C16.3202 2.50029 18.078 3.00746 19.5967 3.9631C21.1154 4.91874 22.3333 6.28396 23.11 7.90151C23.8867 9.51906 24.1907 11.3231 23.9869 13.1059C23.7831 14.8886 23.0799 16.5776 21.9582 17.9781C21.3034 18.7936 19.7105 20.033 19.3569 21.5473H9.69094H9.69213ZM15.715 12.029V7.26094L10.3576 14.4101H13.334V19.1722L18.6914 12.029H15.715Z"
                                                        fill="#B476E5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_36_337">
                                                        <rect width="30" height="30" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="ltr:pl-3 rtl:pr-3">
                                            <h4 class="mb-2 text-lg font-bold text-white">Creativity</h4>
                                            <p class="font-semibold">Curabitur blandit lacus porttitor ridiculus mus.</p>
                                        </div>
                                    </div>
                                    <div class="flex transition">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_36_379)">
                                                    <path
                                                        d="M7.38901 21.9074C8.8422 21.9074 10.0284 20.7213 10.0284 19.268C10.0284 17.8148 8.84225 16.6287 7.38901 16.6287C5.93576 16.6287 4.74963 17.8148 4.74963 19.268C4.74963 20.7212 5.90621 21.9074 7.38901 21.9074Z"
                                                        fill="#B476E5" />
                                                    <path
                                                        d="M9.64281 22.5896C8.99038 23.0344 8.21938 23.2717 7.38902 23.2717C6.55865 23.2717 5.78771 23.0048 5.13522 22.5896C3.86013 23.3014 3 24.6655 3 26.2372V26.7709C3 27.364 3.47454 27.8386 4.06761 27.8386H9.73188V27.6013C9.73188 26.2075 10.2656 24.9324 11.0962 23.9537C10.7104 23.3901 10.2062 22.9158 9.64276 22.5896L9.64281 22.5896Z"
                                                        fill="#B476E5" />
                                                    <path
                                                        d="M20.9714 19.268C20.9714 20.7212 22.1575 21.9074 23.6107 21.9074C25.064 21.9074 26.2501 20.7213 26.2501 19.268C26.2501 17.8148 25.064 16.6287 23.6107 16.6287C22.128 16.6287 20.9714 17.815 20.9714 19.268Z"
                                                        fill="#B476E5" />
                                                    <path
                                                        d="M25.8646 22.5893C25.2122 23.0341 24.4412 23.2714 23.6109 23.2714C22.7805 23.2714 21.9797 23.0045 21.3571 22.5596C20.764 22.8858 20.2894 23.3306 19.9039 23.894C20.7638 24.8727 21.2681 26.1478 21.2681 27.5416V27.7789H26.9324C27.5255 27.7789 28 27.3044 28 26.7113V26.1776C27.9998 24.6652 27.1397 23.3308 25.8646 22.5894L25.8646 22.5893Z"
                                                        fill="#B476E5" />
                                                    <path
                                                        d="M12.8456 20.6318C12.8456 22.085 14.0318 23.2712 15.485 23.2712C16.9383 23.2712 18.1244 22.085 18.1244 20.6318C18.1244 19.1786 16.9383 17.9924 15.485 17.9924C14.0318 17.9924 12.8456 19.1786 12.8456 20.6318Z"
                                                        fill="#B476E5" />
                                                    <path
                                                        d="M17.7388 23.9536C17.0864 24.3984 16.3154 24.6356 15.485 24.6356C14.6547 24.6356 13.8837 24.3688 13.2312 23.9536C11.9561 24.6654 11.096 26.0295 11.096 27.6012V28.1349C11.096 28.728 11.5706 29.2025 12.1636 29.2025H18.8065C19.3996 29.2025 19.8741 28.728 19.8741 28.1349V27.6012C19.8739 26.0295 19.014 24.6654 17.7387 23.9536H17.7388Z"
                                                        fill="#B476E5" />
                                                    <path opacity="0.5"
                                                        d="M11.0663 9.15515C11.3036 10.6379 12.5787 11.7945 14.1209 11.7945C14.625 11.7945 15.07 11.676 15.4852 11.4683C15.9003 11.676 16.3451 11.7945 16.8495 11.7945C18.3916 11.7945 19.6965 10.6676 19.904 9.15515C20.9123 8.65103 21.5945 7.613 21.5945 6.39726C21.5945 5.18132 20.9125 4.17307 19.904 3.63937C19.6667 2.15658 18.3916 1 16.8495 1C16.3453 1 15.9004 1.11853 15.4852 1.32623C15.07 1.11853 14.6253 1 14.1209 1C12.5787 1 11.2738 2.12698 11.0663 3.63937C10.0581 4.1435 9.37585 5.18153 9.37585 6.39726C9.37606 7.613 10.0581 8.65106 11.0663 9.15515ZM18.5989 5.3888C19.1625 5.3888 19.6072 5.83356 19.6072 6.39705C19.6072 6.96055 19.1624 7.4053 18.5989 7.4053C18.0354 7.4053 17.5907 6.96055 17.5907 6.39705C17.5907 5.83356 18.0354 5.3888 18.5989 5.3888ZM15.485 5.3888C16.0485 5.3888 16.4933 5.83356 16.4933 6.39705C16.4933 6.96055 16.0485 7.4053 15.485 7.4053C14.9215 7.4053 14.4768 6.96055 14.4768 6.39705C14.4768 5.83356 14.9215 5.3888 15.485 5.3888ZM12.3711 5.3888C12.9346 5.3888 13.3793 5.83356 13.3793 6.39705C13.3793 6.96055 12.9346 7.4053 12.3711 7.4053C11.8076 7.4053 11.3629 6.96055 11.3629 6.39705C11.3629 5.83356 11.8076 5.3888 12.3711 5.3888Z"
                                                        fill="#B476E5" />
                                                    <path
                                                        d="M9.25737 15.9762C9.73192 15.9762 10.1173 15.5906 10.1173 15.1163C10.1173 14.6417 9.7317 14.2563 9.25737 14.2563C8.78283 14.2563 8.39746 14.6419 8.39746 15.1163C8.39746 15.5908 8.78305 15.9762 9.25737 15.9762Z"
                                                        fill="#B476E5" />
                                                    <path opacity="0.5"
                                                        d="M11.3036 12.0911C10.7105 12.0911 10.2064 12.5656 10.2064 13.1883C10.2064 13.7813 10.6809 14.2855 11.3036 14.2855C11.9265 14.2855 12.4008 13.811 12.4008 13.1883C12.3712 12.5656 11.8967 12.0911 11.3036 12.0911Z"
                                                        fill="#B476E5" />
                                                    <path
                                                        d="M20.8527 15.1163C20.8527 15.5908 21.2383 15.9762 21.7126 15.9762C22.1872 15.9762 22.5726 15.5906 22.5726 15.1163C22.5726 14.6417 22.187 14.2563 21.7126 14.2563C21.2383 14.2563 20.8527 14.6417 20.8527 15.1163Z"
                                                        fill="#B476E5" />
                                                    <path opacity="0.5"
                                                        d="M19.6665 12.0911C19.0734 12.0911 18.5693 12.5656 18.5693 13.1883C18.5693 13.7813 19.0438 14.2855 19.6665 14.2855C20.2596 14.2855 20.7637 13.811 20.7637 13.1883C20.7637 12.5656 20.2892 12.0911 19.6665 12.0911Z"
                                                        fill="#B476E5" />
                                                    <path opacity="0.5"
                                                        d="M15.4851 12.5063C14.892 12.5063 14.3879 12.9809 14.3879 13.6036C14.3879 14.1966 14.8624 14.7008 15.4851 14.7008C16.0782 14.7008 16.5823 14.2262 16.5823 13.6036C16.5823 13.0105 16.0782 12.5063 15.4851 12.5063Z"
                                                        fill="#B476E5" />
                                                    <path
                                                        d="M15.485 15.353C15.0105 15.353 14.6251 15.7386 14.6251 16.2129C14.6251 16.6875 15.0107 17.0729 15.485 17.0729C15.9596 17.0729 16.345 16.6873 16.345 16.2129C16.345 15.7386 15.9596 15.353 15.485 15.353Z"
                                                        fill="#B476E5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_36_379">
                                                        <rect width="30" height="30" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="ltr:pl-3 rtl:pr-3">
                                            <h4 class="mb-2 text-lg font-bold text-white">Innovative Thinking</h4>
                                            <p class="font-semibold">There are many variations of passages of Lorem Ipsum
                                                available</p>
                                        </div>
                                    </div>
                                    <div class="flex transition">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_36_392)">
                                                    <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.2364 27.9997V24.9966C12.4567 25.1078 11.1218 23.6617 11.1218 21.9935C11.1218 20.3249 12.4567 18.9904 14.2364 19.1015V16.0984H8.67477C8.89731 15.6535 9.3422 15.0973 9.3422 14.5412C9.3422 12.3167 6.00534 12.3167 6.00534 14.5412C6.00534 15.0975 6.33905 15.6535 6.56161 16.0984H1V27.1102C1 27.5551 1.44487 27.9999 1.88974 27.9999H14.2365L14.2364 27.9997Z"
                                                        fill="#B476E5" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M28.6959 16.0981H25.2477C25.3588 17.8778 24.0242 19.3238 22.3557 19.3238C20.576 19.3238 19.2412 17.8778 19.3526 16.0981H15.4595V20.7698C15.0146 20.6586 14.4584 20.3249 14.0135 20.3249C11.9001 20.3249 11.9001 23.6618 14.0135 23.6618C14.4584 23.6618 15.0146 23.4392 15.4595 23.2169V27.9997H27.8063C28.2511 27.9997 28.696 27.5549 28.696 27.11V16.0982L28.6959 16.0981Z"
                                                        fill="#B476E5" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M28.6731 14.9015V3.88974C28.6731 3.44487 28.2283 3 27.672 3H15.4367V5.89196C17.1052 5.66942 18.6624 7.00423 18.6624 8.78392C18.6624 10.5636 17.1052 11.8985 15.4367 11.6759V14.9016H20.9983C20.8871 15.3464 20.5534 15.9027 20.5534 16.3476C20.5534 18.5722 24.0017 18.5722 24.0017 16.3476C24.0017 15.9027 23.668 15.3465 23.4454 14.9016L28.6731 14.9015Z"
                                                        fill="#B476E5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_36_392">
                                                        <rect width="30" height="30" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="ltr:pl-3 rtl:pr-3">
                                            <h4 class="mb-2 text-lg font-bold text-white">Rapid Solutions</h4>
                                            <p class="font-semibold">Contrary to popular belief, Lorem Ipsum is not simply
                                                random text.</p>
                                        </div>
                                    </div>
                                    <div class="flex transition">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_36_401)">
                                                    <path opacity="0.5"
                                                        d="M9.68219 19.8007L10.8868 17.8733C11.9699 18.5518 13.2226 18.9106 14.5006 18.9086C15.7787 18.9106 17.0313 18.5518 18.1144 17.8733L19.319 19.8007C17.8749 20.7054 16.2047 21.184 14.5006 21.1814C12.7965 21.184 11.1263 20.7054 9.68219 19.8007Z"
                                                        fill="#B476E5" />
                                                    <path
                                                        d="M24.7284 10.9537C25.3312 10.9537 25.9093 11.1932 26.3355 11.6194C26.7618 12.0457 27.0012 12.6238 27.0012 13.2265V17.7722C27.0012 18.375 26.7618 18.9531 26.3355 19.3794C25.9093 19.8056 25.3312 20.0451 24.7284 20.0451H23.5215C23.2445 22.2421 22.1752 24.2625 20.5143 25.7272C18.8534 27.1918 16.715 28 14.5006 28V25.7272C16.309 25.7272 18.0433 25.0088 19.322 23.7301C20.6007 22.4513 21.3191 20.717 21.3191 18.9086V12.0901C21.3191 10.2817 20.6007 8.54743 19.322 7.26871C18.0433 5.98999 16.309 5.27162 14.5006 5.27162C12.6922 5.27162 10.9579 5.98999 9.67919 7.26871C8.40047 8.54743 7.6821 10.2817 7.6821 12.0901V20.0451H4.27284C3.67004 20.0451 3.09194 19.8056 2.6657 19.3794C2.23946 18.9531 2 18.375 2 17.7722V13.2265C2 12.6238 2.23946 12.0457 2.6657 11.6194C3.09194 11.1932 3.67004 10.9537 4.27284 10.9537H5.47972C5.75704 8.75689 6.82646 6.73677 8.48733 5.27238C10.1482 3.808 12.2864 3 14.5006 3C16.7149 3 18.853 3.808 20.5139 5.27238C22.1748 6.73677 23.2442 8.75689 23.5215 10.9537H24.7284Z"
                                                        fill="#B476E5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_36_401">
                                                        <rect width="30" height="30" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="ltr:pl-3 rtl:pr-3">
                                            <h4 class="mb-2 text-lg font-bold text-white">Top-Notch Support</h4>
                                            <p class="font-semibold">
                                                It has survived not only five centuries, but also the leap into electronic
                                                typesetting
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="top-1/2 mx-auto mt-10 ltr:right-5 rtl:left-5 md:w-[45%] lg:mt-0 xl:absolute xl:-translate-y-1/2">
                                <img src="{{ asset('vendor/plurk/images/box-img.png') }}" alt="box-img"
                                    class="w-full rtl:rotate-y-180" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="flex flex-col items-center justify-center lg:flex-row lg:justify-between">
                        <div class="heading text-center ltr:lg:text-left rtl:lg:text-right">
                            <h6>Our Project</h6>
                            <h4>Some of our finest work.</h4>
                        </div>
                    </div>
                    <div class="mb-7">
                        <ul
                            class="filters home-filter mt-10 flex gap-8 overflow-x-auto whitespace-nowrap pb-3 font-bold lg:mt-0 lg:gap-10">
                            <li class="active filter" data-filter="all"><button type="button">All Work</button></li>
                            <li class="filter" data-filter="design"><button type="button"
                                    class="transition hover:text-secondary">Design</button></li>
                            <li class="filter" data-filter="website"><button type="button"
                                    class="transition hover:text-secondary">Website</button></li>
                            <li class="filter" data-filter="app"><button type="button"
                                    class="transition hover:text-secondary">Mobile App</button></li>
                            <li class="filter" data-filter="web"><button type="button"
                                    class="transition hover:text-secondary">Web Application</button></li>
                            <li class="filter" data-filter="ecommerce"><button type="button"
                                    class="transition hover:text-secondary">Ecommerce</button></li>
                        </ul>
                    </div>
                    <div class="projects grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="project" data-filter="web">
                            <div
                                class="relative rounded-3xl border border-transparent bg-white drop-shadow-[5px_10px_80px_rgba(119,128,161,0.15)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark dark:drop-shadow-none">
                                <a href="portfolio-detail.html" class="absolute top-0 left-0 h-full w-full"></a>
                                <img src="{{ asset('vendor/plurk/images/project-1.png') }}" alt="project-1"
                                    class="h-52 w-full rounded-t-3xl object-cover" />
                                <div class="p-5 text-sm font-bold">
                                    <h6 class="mb-1 text-black dark:text-white">Space Landing page</h6>
                                    <p>Website</p>
                                </div>
                            </div>
                        </div>
                        <div class="project" data-filter="ecommerce">
                            <div
                                class="relative rounded-3xl border border-transparent bg-white drop-shadow-[5px_10px_80px_rgba(119,128,161,0.15)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark dark:drop-shadow-none">
                                <a href="portfolio-detail.html" class="absolute top-0 left-0 h-full w-full"></a>
                                <img src="{{ asset('vendor/plurk/images/project-2.png') }}" alt="project-2"
                                    class="h-52 w-full rounded-t-3xl object-cover" />
                                <div class="p-5 text-sm font-bold">
                                    <h6 class="mb-1 text-black dark:text-white">Crypto Game - UX Interface</h6>
                                    <p>Website, App</p>
                                </div>
                            </div>
                        </div>
                        <div class="project" data-filter="app">
                            <div
                                class="relative rounded-3xl border border-transparent bg-white drop-shadow-[5px_10px_80px_rgba(119,128,161,0.15)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark dark:drop-shadow-none">
                                <a href="portfolio-detail.html" class="absolute top-0 left-0 h-full w-full"></a>
                                <img src="{{ asset('vendor/plurk/images/project-3.png') }}" alt="project-3"
                                    class="h-52 w-full rounded-t-3xl object-cover" />
                                <div class="p-5 text-sm font-bold">
                                    <h6 class="mb-1 text-black dark:text-white">Looking for a quiet place</h6>
                                    <p>Website</p>
                                </div>
                            </div>
                        </div>
                        <div class="project" data-filter="design">
                            <div
                                class="relative rounded-3xl border border-transparent bg-white drop-shadow-[5px_10px_80px_rgba(119,128,161,0.15)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark dark:drop-shadow-none">
                                <a href="portfolio-detail.html" class="absolute top-0 left-0 h-full w-full"></a>
                                <img src="{{ asset('vendor/plurk/images/project-4.png') }}" alt="project-4"
                                    class="h-52 w-full rounded-t-3xl object-cover" />
                                <div class="p-5 text-sm font-bold">
                                    <h6 class="mb-1 text-black dark:text-white">WeTour - Travel Hero Illustration</h6>
                                    <p>Website</p>
                                </div>
                            </div>
                        </div>
                        <div class="project" data-filter="website">
                            <div
                                class="relative rounded-3xl border border-transparent bg-white drop-shadow-[5px_10px_80px_rgba(119,128,161,0.15)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark dark:drop-shadow-none">
                                <a href="portfolio-detail.html" class="absolute top-0 left-0 h-full w-full"></a>
                                <img src="{{ asset('vendor/plurk/images/project-5.png') }}" alt="project-5"
                                    class="h-52 w-full rounded-t-3xl object-cover" />
                                <div class="p-5 text-sm font-bold">
                                    <h6 class="mb-1 text-black dark:text-white">Digital Art Guide</h6>
                                    <p>Branding</p>
                                </div>
                            </div>
                        </div>
                        <div class="project" data-filter="app">
                            <div
                                class="relative rounded-3xl border border-transparent bg-white drop-shadow-[5px_10px_80px_rgba(119,128,161,0.15)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark dark:drop-shadow-none">
                                <a href="portfolio-detail.html" class="absolute top-0 left-0 h-full w-full"></a>
                                <img src="{{ asset('vendor/plurk/images/project-6.png') }}" alt="project-6"
                                    class="h-52 w-full rounded-t-3xl object-cover" />
                                <div class="p-5 text-sm font-bold">
                                    <h6 class="mb-1 text-black dark:text-white">Frozeverse - 3D and motion design</h6>
                                    <p>Branding, Website, App</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="bg-[url(../images/team-bg.png)] bg-cover bg-center bg-no-repeat py-14 dark:bg-black/50 lg:py-[100px]">
                <div class="container">
                    <div class="heading text-center">
                        <h6>Meet Our Team</h6>
                        <h4>Creative Minds</h4>
                    </div>
                    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="group cursor-pointer text-center">
                            <div
                                class="relative h-[280px] rounded-3xl transition-all duration-500 group-hover:shadow-[0_0_25px_#979797]">
                                <img src="{{ asset('vendor/plurk/images/team-member-1.png') }}" alt="team-member-1"
                                    class="h-full w-full rounded-3xl object-cover object-top" />
                            </div>
                            <h4
                                class="pt-5 pb-2 text-xl font-extrabold text-black transition duration-500 group-hover:text-secondary dark:text-white">
                                Aditya Patel
                            </h4>
                            <h6 class="text-sm font-bold">Chief Executive Officer</h6>
                        </div>
                        <div class="group cursor-pointer text-center">
                            <div
                                class="relative h-[280px] rounded-3xl transition-all duration-500 group-hover:shadow-[0_0_25px_#979797]">
                                <img src="{{ asset('vendor/plurk/images/team-member-2.png') }}" alt="team-member-2"
                                    class="h-full w-full rounded-3xl object-cover object-top" />
                            </div>
                            <h4
                                class="pt-5 pb-2 text-xl font-extrabold text-black transition duration-500 group-hover:text-secondary dark:text-white">
                                Audrey Ramirez
                            </h4>
                            <h6 class="text-sm font-bold">Chief Operating Officer</h6>
                        </div>
                        <div class="group cursor-pointer text-center">
                            <div
                                class="relative h-[280px] rounded-3xl transition-all duration-500 group-hover:shadow-[0_0_25px_#979797]">
                                <img src="{{ asset('vendor/plurk/images/team-member-3.png') }}" alt="team-member-3"
                                    class="h-full w-full rounded-3xl object-cover object-top" />
                            </div>
                            <h4
                                class="pt-5 pb-2 text-xl font-extrabold text-black transition duration-500 group-hover:text-secondary dark:text-white">
                                James Robinson
                            </h4>
                            <h6 class="text-sm font-bold">Chief Financial Officer</h6>
                        </div>
                        <div class="group cursor-pointer text-center">
                            <div
                                class="relative h-[280px] rounded-3xl transition-all duration-500 group-hover:shadow-[0_0_25px_#979797]">
                                <img src="{{ asset('vendor/plurk/images/team-member-4.png') }}" alt="team-member-4"
                                    class="h-full w-full rounded-3xl object-cover object-top" />
                            </div>
                            <h4
                                class="pt-5 pb-2 text-xl font-extrabold text-black transition duration-500 group-hover:text-secondary dark:text-white">
                                Daniel Allen
                            </h4>
                            <h6 class="text-sm font-bold">Chief Marketing Officer</h6>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-gradient-to-b from-white/60 to-transparent py-14 dark:from-white/[0.02] lg:py-[100px]">
                <div class="container">
                    <div class="heading text-center">
                        <h6>Pricing Plan</h6>
                        <h4>Choose Affordable Prices</h4>
                    </div>
                    <div class="grid grid-cols-1 gap-[30px] md:grid-cols-2 lg:grid-cols-3">
                        <div class="group flex flex-col rounded-3xl border-2 border-primary bg-white p-6 px-4 transition hover:bg-primary hover:drop-shadow-[-10px_30px_70px_rgba(40,38,77,0.25)] dark:border-white/10 dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.01] dark:to-transparent dark:drop-shadow-none dark:hover:border-gray-dark dark:hover:bg-gray-dark sm:px-6"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div class="mb-8">
                                <h3 class="text-[22px] font-black text-black dark:text-white">Intro</h3>
                            </div>
                            <ul class="space-y-5 pb-7 text-sm font-bold group-hover:text-white">
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Daily content updates</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Unlimited downloads of FREE resources</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Unlimited PREMIUM downloads</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Valid commercial licenses</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.3">
                                                <circle cx="8" cy="8" r="8" fill="#7780A1" />
                                            </g>
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Advanced Search</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.3">
                                                <circle cx="8" cy="8" r="8" fill="#7780A1" />
                                            </g>
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">No attribution required</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.3">
                                                <circle cx="8" cy="8" r="8" fill="#7780A1" />
                                            </g>
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Browse with no ads</p>
                                </li>
                            </ul>
                            <div class="mt-auto border-t-2 border-[#BBC0D0]/50 pt-7">
                                <div class="mb-3 flex flex-col items-center justify-center sm:flex-row sm:justify-between">
                                    <div
                                        class="relative mb-2 text-lg font-extrabold before:absolute before:top-1/2 before:h-2.5 before:w-2.5 before:-translate-y-1/2 before:rounded-full before:bg-primary group-hover:text-white group-hover:before:bg-white ltr:pl-5 ltr:before:left-0 rtl:pr-5 rtl:before:right-0 sm:mb-0">
                                        Monthly
                                    </div>
                                    <a href="javascript:"
                                        class="btn text-xl text-white group-hover:bg-white group-hover:text-primary dark:text-black xl:w-44">$39.99<small
                                            class="text-xs lowercase">/month</small></a>
                                </div>
                                <span
                                    class="block text-center text-sm font-bold text-black dark:text-white sm:pr-5 ltr:sm:text-right rtl:sm:text-left">Billed
                                    every month</span>
                            </div>
                        </div>
                        <div class="group flex flex-col rounded-3xl border-2 border-secondary bg-white p-6 px-4 transition hover:bg-secondary hover:drop-shadow-[-10px_30px_70px_rgba(40,38,77,0.25)] dark:border-white/10 dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.01] dark:to-transparent dark:drop-shadow-none dark:hover:border-gray-dark dark:hover:bg-gray-dark sm:px-6"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div class="relative mb-8">
                                <h3 class="text-[22px] font-black text-black dark:text-white">Base</h3>
                                <div
                                    class="group-hover:white/10 absolute top-1/2 -translate-y-1/2 rounded-xl bg-secondary/10 py-2 px-4 text-xs font-black text-secondary group-hover:bg-white group-hover:text-black ltr:right-0 rtl:left-0">
                                    MOST POPULAR
                                </div>
                            </div>
                            <ul class="space-y-5 pb-7 text-sm font-bold group-hover:text-white">
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Daily content updates</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Unlimited downloads of FREE resources</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Unlimited PREMIUM downloads</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Valid commercial licenses</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Advanced Search</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">No attribution required</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Browse with no ads</p>
                                </li>
                            </ul>
                            <div class="mt-auto border-t-2 border-[#BBC0D0]/50 pt-7">
                                <div class="mb-3 flex flex-col items-center justify-center sm:flex-row sm:justify-between">
                                    <div
                                        class="relative mb-2 text-lg font-extrabold before:absolute before:top-1/2 before:h-2.5 before:w-2.5 before:-translate-y-1/2 before:rounded-full before:bg-secondary group-hover:text-white group-hover:before:bg-white ltr:pl-5 ltr:before:left-0 rtl:pr-5 rtl:before:right-0 sm:mb-0">
                                        Yearly
                                    </div>
                                    <a href="javascript:"
                                        class="btn bg-secondary text-xl text-white group-hover:bg-white group-hover:text-secondary dark:text-black xl:w-44">$14.99<small
                                            class="text-xs lowercase">/month</small></a>
                                </div>
                                <span
                                    class="block text-center text-sm font-bold text-black dark:text-white sm:pr-5 ltr:sm:text-right rtl:sm:text-left">$179.00
                                    every 12 months</span>
                            </div>
                        </div>
                        <div class="group flex flex-col rounded-3xl border-2 border-black bg-white p-6 px-4 transition hover:bg-black hover:drop-shadow-[-10px_30px_70px_rgba(40,38,77,0.25)] dark:border-white/10 dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.01] dark:to-transparent dark:drop-shadow-none dark:hover:border-gray-dark dark:hover:bg-gray-dark sm:px-6"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div class="mb-8">
                                <h3 class="text-[22px] font-black text-black group-hover:text-white dark:text-white">Pro
                                </h3>
                            </div>
                            <ul class="space-y-5 pb-7 text-sm font-bold group-hover:text-white">
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Daily content updates</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Unlimited downloads of FREE resources</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Unlimited PREMIUM downloads</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Valid commercial licenses</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Advanced Search</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">No attribution required</p>
                                </li>
                                <li class="flex items-center">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" fill="#45B649" />
                                            <path d="M5.11438 8.11438L7 10L10.7712 6.22876" stroke="white"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="ltr:pl-3 rtl:pr-3">Browse with no ads</p>
                                </li>
                            </ul>
                            <div class="mt-auto border-t-2 border-[#BBC0D0]/50 pt-7">
                                <div class="mb-3 flex flex-col items-center justify-center sm:flex-row sm:justify-between">
                                    <div
                                        class="relative mb-2 text-lg font-extrabold before:absolute before:top-1/2 before:h-2.5 before:w-2.5 before:-translate-y-1/2 before:rounded-full before:bg-black group-hover:text-gray group-hover:before:bg-white ltr:pl-5 ltr:before:left-0 rtl:pr-5 rtl:before:right-0 sm:mb-0">
                                        Yearly
                                    </div>
                                    <a href="javascript:"
                                        class="btn bg-black text-xl text-white group-hover:bg-white group-hover:text-black xl:w-44">$499</a>
                                </div>
                                <span
                                    class="block text-center text-sm font-bold text-black group-hover:text-white dark:text-white sm:pr-5 ltr:sm:text-right rtl:sm:text-left">Billed
                                    once only</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            
            <section class="relative bg-black mt-10 py-14 dark:bg-transparent lg:py-[100px]">
                <div class="absolute top-0 ltr:right-0 rtl:left-0 rtl:-rotate-180">
                    <svg width="758" height="741" viewBox="0 0 758 741" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.03">
                            <ellipse opacity="0.1" cx="752" cy="370.646" rx="750" ry="749.646"
                                stroke="white" stroke-width="3" stroke-miterlimit="4.62023" stroke-linecap="round"
                                stroke-dasharray="35 50 15 15" />
                            <path opacity="0.1"
                                d="M1443.13 370.646C1443.13 752.153 1133.7 1061.43 752 1061.43C370.296 1061.43 60.8655 752.153 60.8655 370.646C60.8655 -10.8606 370.296 -320.134 752 -320.134C1133.7 -320.134 1443.13 -10.8606 1443.13 370.646Z"
                                stroke="white" stroke-width="3" />
                            <ellipse opacity="0.2" cx="752" cy="370.646" rx="634.561" ry="634.207"
                                stroke="white" stroke-width="3" stroke-miterlimit="4.62023" stroke-linecap="round"
                                stroke-dasharray="35 50 15 15" />
                            <path opacity="0.3"
                                d="M1328.4 370.646C1328.4 688.789 1070.34 946.696 752 946.696C433.66 946.696 175.596 688.789 175.596 370.646C175.596 52.5037 433.66 -205.403 752 -205.403C1070.34 -205.403 1328.4 52.5037 1328.4 370.646Z"
                                stroke="white" stroke-width="3" />
                            <ellipse opacity="0.4" cx="752" cy="370.646" rx="519.83" ry="519.476"
                                stroke="white" stroke-width="3" stroke-miterlimit="4.62023" stroke-linecap="round"
                                stroke-dasharray="35 50 15 15" />
                            <path opacity="0.5"
                                d="M1211.55 370.646C1211.55 624.251 1005.8 829.84 752 829.84C498.197 829.84 292.452 624.251 292.452 370.646C292.452 117.041 498.197 -88.5479 752 -88.5479C1005.8 -88.5479 1211.55 117.041 1211.55 370.646Z"
                                stroke="white" stroke-width="3" />
                            <path opacity="0.6"
                                d="M1155.6 370.646C1155.6 593.351 974.903 773.891 752 773.891C529.097 773.891 348.401 593.351 348.401 370.646C348.401 147.942 529.097 -32.5986 752 -32.5986C974.903 -32.5986 1155.6 147.942 1155.6 370.646Z"
                                stroke="white" stroke-width="3" />
                            <ellipse opacity="0.7" cx="752" cy="370.646" rx="350.567" ry="350.212"
                                stroke="white" stroke-width="3" stroke-miterlimit="4.62023" stroke-linecap="round"
                                stroke-dasharray="35 50 15 15" />
                            <path opacity="0.8"
                                d="M1040.16 370.647C1040.16 529.596 911.148 658.453 752 658.453C592.852 658.453 463.84 529.596 463.84 370.647C463.84 211.698 592.852 82.8408 752 82.8408C911.148 82.8408 1040.16 211.698 1040.16 370.647Z"
                                stroke="white" stroke-width="3" />
                            <ellipse opacity="0.9" cx="752" cy="370.646" rx="223.088" ry="222.734"
                                stroke="white" stroke-width="3" stroke-miterlimit="4.62023" stroke-linecap="round"
                                stroke-dasharray="35 50 15 15" />
                            <path
                                d="M909.848 370.646C909.848 457.624 839.18 528.14 752 528.14C664.82 528.14 594.152 457.624 594.152 370.646C594.152 283.667 664.82 213.151 752 213.151C839.18 213.151 909.848 283.667 909.848 370.646Z"
                                stroke="white" stroke-width="3" />
                            <ellipse cx="752" cy="370.646" rx="106.941" ry="106.586" stroke="white"
                                stroke-width="3" stroke-miterlimit="4.62023" stroke-linecap="round"
                                stroke-dasharray="35 50 15 15" />
                        </g>
                    </svg>
                </div>
                <div class="container">
                    <div class="heading text-center ltr:lg:text-left rtl:lg:text-right">
                        <h6>Testimonial</h6>
                        <h4 class="!text-white">Feedback from our clients</h4>
                    </div>
                    <div class="mx-auto lg:w-11/12">
                        <div class="swiper mySwiper relative sm:py-12 md:py-0">
                            <div class="swiper-wrapper">
                            @foreach($testimonials as $t)
                                <div class="swiper-slide">
                                    
                                    <div class="items-center gap-4 sm:grid sm:grid-cols-3">
                                        <div class="col-span-2">
                                            <div class="relative rounded-3xl bg-white/[0.02] p-6">
                                                <img src="{{ asset('vendor/plurk/images/blue-quote.png') }}"
                                                    alt="blue-quote"
                                                    class="absolute top-0 ltr:right-0 rtl:left-0 sm:-top-6 ltr:sm:-right-6 rtl:sm:-left-6" />
                                                <div class="pb-8">
                                                    <svg width="96" height="16" viewBox="0 0 96 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M86.2864 2.84744C87.0637 1.5558 88.9363 1.5558 89.7136 2.84744L90.1964 3.64962C90.4756 4.11365 90.9311 4.44459 91.4587 4.56678L92.3708 4.77803C93.8395 5.11816 94.4181 6.8991 93.4299 8.03752L92.8162 8.74454C92.4612 9.15352 92.2872 9.68898 92.334 10.2285L92.4149 11.1613C92.5453 12.6631 91.0303 13.7638 89.6423 13.1757L88.7802 12.8105C88.2815 12.5993 87.7185 12.5993 87.2198 12.8105L86.3577 13.1757C84.9697 13.7638 83.4547 12.6631 83.5851 11.1613L83.666 10.2285C83.7128 9.68899 83.5388 9.15352 83.1838 8.74454L82.5701 8.03752C81.5819 6.89911 82.1605 5.11816 83.6292 4.77803L84.5413 4.56678C85.0689 4.44459 85.5244 4.11365 85.8036 3.64962L86.2864 2.84744Z"
                                                            fill="#7780A1" />
                                                        <path
                                                            d="M66.2864 2.84744C67.0637 1.5558 68.9363 1.5558 69.7136 2.84744L70.1964 3.64962C70.4756 4.11365 70.9311 4.44459 71.4587 4.56678L72.3708 4.77803C73.8395 5.11816 74.4181 6.8991 73.4299 8.03752L72.8162 8.74454C72.4612 9.15352 72.2872 9.68898 72.334 10.2285L72.4149 11.1613C72.5453 12.6631 71.0303 13.7638 69.6423 13.1757L68.7802 12.8105C68.2815 12.5993 67.7185 12.5993 67.2198 12.8105L66.3577 13.1757C64.9697 13.7638 63.4547 12.6631 63.5851 11.1613L63.666 10.2285C63.7128 9.68899 63.5388 9.15352 63.1838 8.74454L62.5701 8.03752C61.5819 6.89911 62.1605 5.11816 63.6292 4.77803L64.5413 4.56678C65.0689 4.44459 65.5244 4.11365 65.8036 3.64962L66.2864 2.84744Z"
                                                            fill="#FFBD11" />
                                                        <path
                                                            d="M46.2864 2.84744C47.0637 1.5558 48.9363 1.5558 49.7136 2.84744L50.1964 3.64962C50.4756 4.11365 50.9311 4.44459 51.4587 4.56678L52.3708 4.77803C53.8395 5.11816 54.4181 6.8991 53.4299 8.03752L52.8162 8.74454C52.4612 9.15352 52.2872 9.68898 52.334 10.2285L52.4149 11.1613C52.5453 12.6631 51.0303 13.7638 49.6423 13.1757L48.7802 12.8105C48.2815 12.5993 47.7185 12.5993 47.2198 12.8105L46.3577 13.1757C44.9697 13.7638 43.4547 12.6631 43.5851 11.1613L43.666 10.2285C43.7128 9.68899 43.5388 9.15352 43.1838 8.74454L42.5701 8.03752C41.5819 6.89911 42.1605 5.11816 43.6292 4.77803L44.5413 4.56678C45.0689 4.44459 45.5244 4.11365 45.8036 3.64962L46.2864 2.84744Z"
                                                            fill="#FFBD11" />
                                                        <path
                                                            d="M26.2864 2.84744C27.0637 1.5558 28.9363 1.5558 29.7136 2.84744L30.1964 3.64962C30.4756 4.11365 30.9311 4.44459 31.4587 4.56678L32.3708 4.77803C33.8395 5.11816 34.4181 6.8991 33.4299 8.03752L32.8162 8.74454C32.4612 9.15352 32.2872 9.68898 32.334 10.2285L32.4149 11.1613C32.5453 12.6631 31.0303 13.7638 29.6423 13.1757L28.7802 12.8105C28.2815 12.5993 27.7185 12.5993 27.2198 12.8105L26.3577 13.1757C24.9697 13.7638 23.4547 12.6631 23.5851 11.1613L23.666 10.2285C23.7128 9.68899 23.5388 9.15352 23.1838 8.74454L22.5701 8.03752C21.5819 6.89911 22.1605 5.11816 23.6292 4.77803L24.5413 4.56678C25.0689 4.44459 25.5244 4.11365 25.8036 3.64962L26.2864 2.84744Z"
                                                            fill="#FFBD11" />
                                                        <path
                                                            d="M6.28638 2.84744C7.0637 1.5558 8.9363 1.5558 9.71362 2.84744L10.1964 3.64962C10.4756 4.11365 10.9311 4.44459 11.4587 4.56678L12.3708 4.77803C13.8395 5.11816 14.4181 6.8991 13.4299 8.03752L12.8162 8.74454C12.4612 9.15352 12.2872 9.68898 12.334 10.2285L12.4149 11.1613C12.5453 12.6631 11.0303 13.7638 9.64225 13.1757L8.78018 12.8105C8.28151 12.5993 7.71849 12.5993 7.21982 12.8105L6.35775 13.1757C4.96968 13.7638 3.45472 12.6631 3.58506 11.1613L3.66601 10.2285C3.71283 9.68899 3.53885 9.15352 3.18383 8.74454L2.57009 8.03752C1.58187 6.89911 2.16054 5.11816 3.62916 4.77803L4.54126 4.56678C5.06887 4.44459 5.52437 4.11365 5.80362 3.64962L6.28638 2.84744Z"
                                                            fill="#FFBD11" />
                                                    </svg>
                                                </div>
                                                <p class="relative font-medium italic text-white">
                                                    {{ $t -> testimonial}}
                                                    <span class="absolute -left-2 -top-2">
                                                        <svg width="100" height="73" viewBox="0 0 100 73"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.05">
                                                                <path
                                                                    d="M79.5222 0C85.1084 0 89.8948 2.12795 93.8833 6.1167C98.1392 10.1054 100 14.8935 100 20.2128C100 25.2666 98.4045 29.7875 94.9462 33.7764C91.4881 38.0323 85.9039 38.8302 81.3825 39.0952C82.1803 45.7443 85.9037 52.6589 89.3619 57.4472C89.8944 58.245 90.425 59.0427 91.2246 59.5752C92.2876 60.6382 92.2876 62.2356 91.2246 63.2986L83.5126 71.543C82.4495 72.8732 80.3216 72.606 79.2567 71.543C76.0657 68.0849 72.8731 63.831 70.2144 59.5751C62.7675 47.6072 59.044 35.6393 59.044 23.669C59.044 16.7544 61.1719 10.9032 65.1606 6.64734C69.1493 2.39334 74.2029 0.000144939 79.5217 0.000144939L79.5222 0Z"
                                                                    fill="#93A2B2" />
                                                                <path
                                                                    d="M20.4783 0C26.0645 0 30.8509 2.12795 34.8394 6.1167C39.0952 10.1054 40.9561 14.8935 40.9561 20.2128C40.9561 25.2666 39.3606 29.7875 35.9023 33.7764C32.4442 38.0323 26.86 38.8302 22.3386 39.0952C23.1363 45.7443 26.8597 52.6589 30.318 57.4472C30.8504 58.245 31.381 59.0427 32.1806 59.5752C33.2437 60.6382 33.2437 62.2356 32.1806 63.2986L24.4686 71.543C23.4056 72.8732 21.2776 72.606 20.2128 71.543C17.0218 68.0849 13.8292 63.831 11.1705 59.5751C3.72351 47.6072 7.62939e-06 35.6393 7.62939e-06 23.669C7.62939e-06 16.7544 2.12797 10.9032 6.11671 6.64734C10.1054 2.39334 14.8921 0.000144939 20.4778 0.000144939L20.4783 0Z"
                                                                    fill="#93A2B2" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </p>
                                                <div class="mt-12">
                                                    <h5 class="font-extrabold text-primary">{{ $t -> name}}</h5>
                                                    <h6 class="text-sm font-bold italic">CEO of Lifted</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{ asset('vendor/plurk/images/testimonial.png') }}" alt="testimonial"
                                            class="mx-auto ml-auto mt-4 h-20 w-20 rounded-full object-cover object-top rtl:mr-auto sm:mt-0 sm:h-auto sm:w-auto sm:rounded-[150px] sm:object-scale-down ltr:sm:mr-0 rtl:sm:ml-0" />
                                    </div>
                                    
                                </div>
                                @endforeach
                            </div>
                            <div
                                class="bottom-0 z-[1] mt-5 flex items-center justify-center gap-4 ltr:right-1/3 rtl:left-1/3 sm:absolute sm:mt-0 sm:justify-end">
                                <a href="javascript:"
                                    class="text-sm font-extrabold text-white transition hover:text-secondary dark:hover:text-secondary">View
                                    All</a>
                                <button type="button"
                                    class="testimonial-swiper-button-prev static mt-0 flex h-10 w-10 items-center justify-center rounded-full bg-white/5 transition after:text-[0px] hover:bg-secondary rtl:rotate-180">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.95007 1.2002L1.48924 5.3424C1.06317 5.73803 1.06317 6.41236 1.48924 6.80799L5.95007 10.9502"
                                            stroke="white" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="testimonial-swiper-button-next static mt-0 flex h-10 w-10 items-center justify-center rounded-full bg-white/5 transition after:text-[0px] hover:bg-secondary rtl:rotate-180">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.05005 10.7998L5.51089 6.6576C5.93695 6.26197 5.93695 5.58764 5.51089 5.19201L1.05005 1.0498"
                                            stroke="white" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-14 dark:bg-gray-dark lg:py-[100px]">
                <div class="container">
                    <div class="relative z-10 lg:flex">
                        <div
                            class="heading text-center lg:mb-0 lg:w-1/3 ltr:lg:pr-10 ltr:lg:text-left rtl:lg:pl-10 rtl:lg:text-right">
                            <h6>Get In Touch.</h6>
                            <h4 class="sm:!leading-[50px]">Ready to Get Started?</h4>
                            <img src="{{ asset('vendor/plurk/images/form-img.png') }}" alt="form-img" class="mx-auto"
                                data-aos="fade-right" data-aos-duration="1000" />
                        </div>
                        <form action="" class="rounded-3xl bg-white px-4 py-12 dark:bg-[#101626] lg:w-2/3 lg:px-8">
                            <div class="grid gap-10 sm:grid-cols-2">
                                <div class="relative">
                                    <input type="text" name="name"
                                        class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12" />
                                    <label for=""
                                        class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">Full
                                        Name</label>
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white">
                                        <path
                                            d="M5.42855 5.57875C5.42855 8.10348 7.47525 10.1502 9.99998 10.1502C12.5247 10.1502 14.5714 8.10348 14.5714 5.57875C14.5714 3.05402 12.5247 1.00732 9.99998 1.00732"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                        <path
                                            d="M2 16.9328C2 15.9495 2.61812 15.0724 3.5441 14.7417V14.7417C7.71891 13.2507 12.2811 13.2507 16.4559 14.7417V14.7417C17.3819 15.0724 18 15.9495 18 16.9328V18.7014C18 19.9185 16.922 20.8535 15.7172 20.6813L13.8184 20.4101C11.2856 20.0483 8.71435 20.0483 6.18162 20.4101L4.28284 20.6813C3.07798 20.8535 2 19.9185 2 18.7014V16.9328Z"
                                            stroke="currentColor" stroke-width="1.8" />
                                    </svg>
                                </div>
                                <div class="relative">
                                    <input type="email" name="email"
                                        class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12" />
                                    <label for=""
                                        class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">Email
                                        Address</label>
                                    <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white">
                                        <path
                                            d="M1 8.00732V7.00732C1 4.2459 3.23858 2.00732 6 2.00732H16C18.7614 2.00732 21 4.2459 21 7.00732V13.0073C21 15.7687 18.7614 18.0073 16 18.0073H6C3.23858 18.0073 1 15.7687 1 13.0073V12.0073"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                        <path
                                            d="M5 7.00732L9.8 10.6073C10.5111 11.1407 11.4889 11.1407 12.2 10.6073L17 7.00732"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="relative">
                                    <input type="text" name="mobile"
                                        class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12" />
                                    <label for=""
                                        class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">Mobile
                                        Number</label>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white">
                                        <path
                                            d="M6.45241 1.40806C5.45292 0.783702 4.14202 0.887138 3.2983 1.73086L1.86856 3.1606C-0.302899 5.33207 1.73747 10.8931 6.42586 15.5815C11.1142 20.2699 16.6753 22.3102 18.8467 20.1388L20.2765 18.709C21.2635 17.722 21.2374 16.0956 20.2182 15.0764L18.0036 12.8619C16.9844 11.8426 15.358 11.8165 14.371 12.8036L14.0639 13.1107C13.531 13.6436 12.6713 13.6957 12.0713 13.2005C11.4925 12.7229 10.9159 12.208 10.3576 11.6497C9.79933 11.0914 9.28441 10.5149 8.80678 9.93607C8.31161 9.33601 8.36374 8.47631 8.89666 7.9434L9.20375 7.63631C9.98187 6.85819 10.1303 5.68271 9.65898 4.72062"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div class="relative">
                                    <input type="text" name="city"
                                        class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12" />
                                    <label for=""
                                        class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">City</label>
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white">
                                        <path
                                            d="M5.89416 2.31259C7.20149 1.48625 8.75475 1.00732 10.4211 1.00732C15.0719 1.00732 18.8421 4.73828 18.8421 9.34066C18.8421 15.0541 12.1053 21.0073 10.4211 21.0073C8.73684 21.0073 2 15.0541 2 9.34066C2 7.87581 2.38193 6.49924 3.05263 5.30315"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                        <path
                                            d="M13.4571 9.77392C13.5365 9.49702 13.579 9.20456 13.579 8.90216C13.579 7.15811 12.1651 5.74427 10.4211 5.74427C8.67702 5.74427 7.26318 7.15811 7.26318 8.90216C7.26318 10.6462 8.67702 12.0601 10.4211 12.0601C10.6633 12.0601 10.8991 12.0328 11.1256 11.9812"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="relative mt-10">
                                <input type="text" name="message"
                                    class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12" />
                                <label for=""
                                    class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">Message</label>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white">
                                    <path
                                        d="M1 11.467V18.9267C1 19.7652 1.96993 20.2314 2.6247 19.7076L5.45217 17.4456C5.8068 17.1619 6.24742 17.0073 6.70156 17.0073H16C18.7614 17.0073 21 14.7687 21 12.0073V6.00732C21 3.2459 18.7614 1.00732 16 1.00732H6C3.23858 1.00732 1 3.2459 1 6.00732V7.62225"
                                        stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                    <circle cx="6.05005" cy="9.05713" r="1.25" fill="currentColor" />
                                    <circle cx="11.05" cy="9.05713" r="1.25" fill="currentColor" />
                                    <circle cx="16.05" cy="9.05713" r="1.25" fill="currentColor" />
                                </svg>
                            </div>
                            <div class="mt-10 text-center ltr:lg:text-right rtl:lg:text-left">
                                <button type="button"
                                    class="btn bg-gray px-12 capitalize text-white dark:bg-white dark:text-black dark:hover:bg-secondary">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            
        </div>
{{--
        @include('layouts.footer')--}}
    </div>

    <!-- Swiper Slider JS -->
    <script src="{{ asset('vendor/plurk/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter Js -->
    <script src="{{ asset('vendor/plurk/js/vanilla-counter.js') }}"></script>
    <!-- AOS Animation JS -->
    <script src="{{ asset('vendor/plurk/js/aos.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('vendor/plurk/js/custom.js') }}"></script>

    <script>
        // Testimonial Slider
        var swiper = new Swiper('.mySwiper', {
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 30,
            speed: 1000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.testimonial-swiper-button-next',
                prevEl: '.testimonial-swiper-button-prev',
            },
        });

        // Counter Js
        VanillaCounter();

        //  Filter

        const filters = document.querySelectorAll('.filter');

        filters.forEach((filter) => {
            filter.addEventListener('click', function() {
                let selectedFilter = filter.getAttribute('data-filter');
                let itemsToHide = document.querySelectorAll(
                    `.projects .project:not([data-filter='${selectedFilter}'])`);
                let itemsToShow = document.querySelectorAll(`.projects [data-filter='${selectedFilter}']`);

                if (selectedFilter == 'all') {
                    itemsToHide = [];
                    itemsToShow = document.querySelectorAll('.projects [data-filter]');
                }

                filterMenu = document.querySelectorAll('.filters li.filter');
                filterMenu.forEach((el) => {
                    el.classList.remove('active');
                });
                filter.classList.add('active');

                itemsToHide.forEach((el) => {
                    el.classList.add('hidden');
                    el.classList.remove('block');
                });

                itemsToShow.forEach((el) => {
                    el.classList.remove('hidden');
                    el.classList.add('block');
                });
            });
        });
    </script>
@endsection
