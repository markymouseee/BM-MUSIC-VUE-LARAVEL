<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import { Head, Link, router } from '@inertiajs/vue3'
import Logo from '@/assets/images/BM-logo.png'
import { ref, onMounted, onBeforeUnmount } from "vue"

const goToLogin = () => {
    router.visit('/sign-in')
}

const activeLink = ref("home")

const setActive = (link) => {
    activeLink.value = link
}

onMounted(() => {
    const sections = document.querySelectorAll("section");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    activeLink.value = entry.target.id;
                }
            });
        },
        { threshold: 0.6 }
    );

    sections.forEach((section) => observer.observe(section));

    onBeforeUnmount(() => {
        sections.forEach((section) => observer.unobserve(section));
    });
});
</script>

<template>
    <GuestLayout>

        <Head title="BM Music" />
        <nav
            class="bg-white/80 backdrop-blur-md border-gray-200 dark:bg-gray-900/80 fixed w-full top-0 left-0 z-50 shadow-sm transition-colors">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

                <Link href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <div class="rounded-full overflow-hidden w-12 h-12 ring-2 ring-blue-600 dark:ring-blue-400">
                    <img :src="Logo" class="w-full h-full object-cover" alt="BM Logo" />
                </div>
                <span class="self-center text-2xl font-extrabold whitespace-nowrap text-gray-900 dark:text-gray-100">
                    BM Music
                </span>
                </Link>

                <div class="flex md:order-2 space-x-3">
                    <button @click="goToLogin"
                        class="text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 transition-all">
                        Get started
                    </button>

                    <button data-collapse-toggle="navbar-cta" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-600 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>

                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 md:flex-row md:mt-0">
                        <li>
                            <a href="#home" @click="setActive('home')" :class="[
                                'relative block px-4 py-2 font-medium transition-colors duration-300',
                                activeLink === 'home'
                                    ? 'text-blue-600 dark:text-blue-400'
                                    : 'text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400'
                            ]">
                                Home
                                <span :class="[
                                    'absolute left-0 -bottom-1 h-0.5 w-full scale-x-0 transform bg-blue-600 transition-transform duration-300',
                                    activeLink === 'home' ? 'scale-x-100' : 'group-hover:scale-x-100'
                                ]"></span>
                            </a>
                        </li>

                        <li>
                            <a href="#about" @click="setActive('about')" :class="[
                                'relative block px-4 py-2 font-medium transition-colors duration-300',
                                activeLink === 'about'
                                    ? 'text-blue-600 dark:text-blue-400'
                                    : 'text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400'
                            ]">
                                About
                                <span :class="[
                                    'absolute left-0 -bottom-1 h-0.5 w-full scale-x-0 transform bg-blue-600 transition-transform duration-300',
                                    activeLink === 'about' ? 'scale-x-100' : 'group-hover:scale-x-100'
                                ]"></span>
                            </a>
                        </li>

                        <li>
                            <a href="#services" @click="setActive('services')" :class="[
                                'relative block px-4 py-2 font-medium transition-colors duration-300',
                                activeLink === 'services'
                                    ? 'text-blue-600 dark:text-blue-400'
                                    : 'text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400'
                            ]">
                                Services
                                <span :class="[
                                    'absolute left-0 -bottom-1 h-0.5 w-full scale-x-0 transform bg-blue-600 transition-transform duration-300',
                                    activeLink === 'services' ? 'scale-x-100' : 'group-hover:scale-x-100'
                                ]"></span>
                            </a>
                        </li>

                        <li>
                            <a href="#contact" @click="setActive('contact')" :class="[
                                'relative block px-4 py-2 font-medium transition-colors duration-300',
                                activeLink === 'contact'
                                    ? 'text-blue-600 dark:text-blue-400'
                                    : 'text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400'
                            ]">
                                Contact
                                <span :class="[
                                    'absolute left-0 -bottom-1 h-0.5 w-full scale-x-0 transform bg-blue-600 transition-transform duration-300',
                                    activeLink === 'contact' ? 'scale-x-100' : 'group-hover:scale-x-100'
                                ]"></span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <section id="home"
            class="relative h-screen bg-gradient-to-r from-blue-700 to-purple-600 text-white flex items-center justify-center overflow-hidden">

            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="absolute top-20 left-1/4 w-72 h-72 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
                <div
                    class="absolute bottom-20 right-1/3 w-96 h-96 bg-purple-400/20 rounded-full blur-3xl animate-float">
                </div>
            </div>


            <div class="relative text-center px-6 md:px-12 max-w-3xl animate-fade-in-up">
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight drop-shadow-lg leading-tight">
                    Welcome to <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-300 to-pink-400">BM
                        Music</span>
                </h1>
                <p
                    class="text-lg md:text-2xl mb-10 text-white/90 max-w-xl mx-auto leading-relaxed animate-fade-in delay-200">
                    Stream your favorite songs, discover new artists, and enjoy music like never before.
                </p>

                <div class="flex justify-center gap-4 animate-fade-in delay-400">
                    <button @click="goToLogin"
                        class="px-8 py-3 rounded-2xl bg-white text-blue-700 font-semibold hover:scale-105 hover:shadow-2xl transition-all duration-300 ease-out">
                        Get Started
                    </button>
                    <a href="#about"
                        class="px-8 py-3 rounded-2xl border border-white/40 bg-white/10 text-white font-semibold backdrop-blur hover:bg-white/20 hover:scale-105 transition-all duration-300 ease-out">
                        Learn More
                    </a>
                </div>
            </div>

            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                <a href="#about" class="text-white/70 hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
            </div>
        </section>

        <section id="about" class="py-24 bg-gray-100 dark:bg-gray-900">
            <div class="max-w-screen-lg mx-auto px-4 text-center animate-fade-in">
                <h2 class="text-4xl font-bold mb-6 text-gray-900 dark:text-white">About Us</h2>
                <p class="text-gray-700 dark:text-gray-300 max-w-2xl mx-auto">
                    BM Music is a modern platform that gives you access to millions of tracks worldwide. Our mission is
                    to connect people with the music they love, anytime and anywhere.
                </p>
            </div>
        </section>

        <section id="services" class="py-24">
            <div class="max-w-screen-xl mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-12 text-gray-900 dark:text-white">Our Services</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div
                        class="service-card bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:-translate-y-2 transition transform hover:shadow-2xl">
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Unlimited Streaming</h3>
                        <p class="text-gray-600 dark:text-gray-300">Enjoy millions of songs without limits, with curated
                            playlists just for you.</p>
                    </div>
                    <div
                        class="service-card bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:-translate-y-2 transition transform hover:shadow-2xl">
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Personalized
                            Recommendations</h3>
                        <p class="text-gray-600 dark:text-gray-300">Discover new music based on your listening habits
                            and preferences.</p>
                    </div>
                    <div
                        class="service-card bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:-translate-y-2 transition transform hover:shadow-2xl">
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Offline Mode</h3>
                        <p class="text-gray-600 dark:text-gray-300">Download your favorite tracks and listen even when
                            you're offline.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="py-24 bg-gray-100 dark:bg-gray-900">
            <div class="max-w-screen-md mx-auto px-4 animate-fade-in">
                <h2 class="text-4xl font-bold text-center mb-12 text-gray-900 dark:text-white">Contact Us</h2>
                <form class="space-y-6">
                    <input type="text" placeholder="Your Name"
                        class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white" />
                    <input type="email" placeholder="Your Email"
                        class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white" />
                    <textarea rows="4" placeholder="Your Message"
                        class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white"></textarea>
                    <button type="submit"
                        class="px-6 py-3 rounded-lg bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold hover:opacity-90 transition w-full">
                        Send Message
                    </button>
                </form>
            </div>
        </section>

    </GuestLayout>
</template>

<style scoped>
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes float {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-20px);
    }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(40px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 1.2s ease-out forwards;
}

.animate-fade-in {
    animation: fade-in 1s ease-out forwards;
}
</style>
