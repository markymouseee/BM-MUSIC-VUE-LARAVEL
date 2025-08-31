<script setup>
import { ref } from 'vue'
import Logo from '@/assets/images/BM-logo.png'
import { Head, Link } from '@inertiajs/vue3'
import InputField from '@/Components/InputField.vue'

const username = ref('')
const password = ref('')
const showPassword = ref(false)
const loading = ref(false)

function toggleShow() {
    showPassword.value = !showPassword.value
}

async function submit() {
    if (!username.value || !password.value) {
        // replace with nicer UI notice if you want
        return alert('Please enter username and password')
    }

    loading.value = true
    try {
        // TODO: call your API / login action here
        console.log('submit', { username: username.value, password: password.value })
        // Example:
        // await axios.post('/api/login', { username: username.value, password: password.value })
    } catch (err) {
        console.error(err)
        alert('Login failed — check console for details')
    } finally {
        loading.value = false
    }
}
</script>

<template>
    <div class="min-h-screen flex items-center justify-center p-6 
    bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-700 
    dark:from-gray-900 dark:via-gray-800 dark:to-black relative overflow-hidden">

        <div
            class="absolute top-20 left-10 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse">
        </div>
        <div
            class="absolute bottom-20 right-10 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse">
        </div>

        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
        </div>

        <div
            class="w-full max-w-4xl grid grid-cols-1 z-10 md:grid-cols-2 bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden">
            <div
                class="px-8 py-10 bg-gradient-to-br from-blue-600 to-purple-600 text-white flex flex-col justify-between">
                <div>
                    <Link href="/">
                    <img :src="Logo" alt="BM Music" class="w-14 h-14 rounded-md shadow-sm bg-white/10" />
                    <h2 class="mt-6 text-3xl font-extrabold tracking-tight">BM Music</h2>
                    </Link>
                    <p class="mt-3 text-sm opacity-90 max-w-xs">
                        Sign in to manage your music, playlists, and settings.
                    </p>
                </div>

                <div class="mt-6">
                    <ul class="text-sm space-y-2 opacity-95">
                        <li class="flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-7 h-7 bg-white/20 rounded-full">
                                <svg height="20" width="20" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                    xml:space="preserve">
                                    <path style="fill:#5B699C;" d="M256,0C114.84,0,0,114.842,0,256s114.84,256,256,256c141.158,0,256-114.842,256-256S397.158,0,256,0z
	" />
                                    <path style="fill:#2D4175;"
                                        d="M256,0v512c141.158,0,256-114.842,256-256S397.158,0,256,0z" />
                                    <path style="fill:#D4CBF6;" d="M383.147,236.268l-167.564-104.73c-7.174-4.485-16.215-4.723-23.617-0.621
	c-7.399,4.102-11.99,11.895-11.99,20.356v209.455c0,8.459,4.591,16.254,11.99,20.356c3.516,1.949,7.401,2.917,11.281,2.917
	c4.288,0,8.569-1.184,12.336-3.537L383.147,275.74c6.805-4.251,10.938-11.711,10.938-19.735
	C394.085,247.979,389.952,240.521,383.147,236.268z" />
                                    <path style="fill:#AB99EC;" d="M383.147,236.268L256,156.799v198.405l127.147-79.465c6.805-4.251,10.938-11.711,10.938-19.735
	C394.085,247.979,389.952,240.521,383.147,236.268z" />
                                </svg>
                            </span>
                            Curated playlists
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-7 h-7 bg-white/20 rounded-full">
                                <svg height="20" width="20" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512" xml:space="preserve">
                                    <circle style="fill:#324A5E;" cx="256" cy="256" r="256" />
                                    <path style="fill:#2B3B4E;" d="M296.388,508.818c109.035-17.282,195.15-103.395,212.43-212.432L304.93,92.498L201.076,223.453
	l-45.022,28.898l94.098,94.098l-43.079,73.056L296.388,508.818z" />
                                    <path style="fill:#FFD15D;" d="M304.93,92.498l-34.268,114.507c-3.594,12.009,3.229,24.659,15.238,28.253l61.861,18.511
	c11.316,3.386,14.751,17.734,6.197,25.879L207.07,419.504l34.266-114.507c3.594-12.009-3.229-24.659-15.238-28.253l-61.861-18.511
	c-11.316-3.386-14.751-17.734-6.197-25.879L304.93,92.498z" />
                                    <path style="fill:#F9B54C;" d="M347.762,253.769l-61.861-18.511c-12.009-3.594-18.832-16.243-15.238-28.253l34.268-114.507
	l-48.642,46.313v233.832l97.671-92.994C362.513,271.503,359.077,257.155,347.762,253.769z" />
                                </svg>
                            </span>
                            Fast sync across devices
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-7 h-7 bg-white/20 rounded-full">
                                <svg fill="#000000" width="20" height="20" viewBox="0 0 24 24" id="lock-alt"
                                    data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
                                    <path id="secondary"
                                        d="M17,11H7a1,1,0,0,1-1-1V8A6,6,0,0,1,18,8v2A1,1,0,0,1,17,11ZM8,9h8V8A4,4,0,0,0,8,8Z"
                                        style="fill: rgb(44, 169, 188);"></path>
                                    <path id="primary"
                                        d="M18,9H6a2,2,0,0,0-2,2v3a8,8,0,0,0,8,8h.24A8.21,8.21,0,0,0,20,13.71V11A2,2,0,0,0,18,9Z"
                                        style="fill: rgb(0, 0, 0);"></path>
                                    <path id="secondary-2" data-name="secondary"
                                        d="M13.5,15A1.5,1.5,0,1,0,11,16.11V17a1,1,0,0,0,2,0v-.89A1.5,1.5,0,0,0,13.5,15Z"
                                        style="fill: rgb(44, 169, 188);"></path>
                                </svg>
                            </span>
                            Secure account
                        </li>
                    </ul>
                </div>
            </div>

            <div class="p-8 sm:p-10">

                <Head title="Login - BM Music" />

                <div class="mb-6">
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Welcome back</h3>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                        Sign in to your account using username or email.
                    </p>
                </div>

                <form @submit.prevent="submit" class="space-y-5">
                    <div>
                        <label for="password"
                            class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Username or
                            email</label>
                        <InputField id="username" type="text" label="Username"
                            placeholder="yourname or name@example.com" v-model="username" />
                    </div>

                    <div>
                        <label for="password"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                        <div class="mt-2 relative">
                            <InputField v-if="showPassword" id="password" type="text" placeholder="••••••••"
                                v-model="password" />
                            <InputField v-else id="password" type="password" placeholder="••••••••"
                                v-model="password" />
                            <button type="button" @click="toggleShow"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm text-gray-500 dark:text-gray-300">
                                {{ showPassword ? 'Hide' : 'Show' }}
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="inline-flex items-center gap-2 text-sm text-gray-600 dark:text-gray-300">
                            <input type="checkbox" class="h-4 w-4 rounded border-gray-300 dark:bg-gray-700" />
                            Remember me
                        </label>
                        <a href="#" class="text-sm text-blue-600 hover:underline dark:text-blue-600">Forgot
                            password?</a>
                    </div>

                    <div>
                        <button type="submit" :disabled="loading"
                            class="w-full inline-flex items-center justify-center py-2 px-4 rounded-lg bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold shadow hover:from-blue-500 disabled:opacity-60">
                            <span v-if="!loading">Sign in</span>
                            <span v-else>Signing in…</span>
                        </button>
                    </div>
                </form>

                <div class="mt-6 text-center text-sm text-gray-500 dark:text-gray-400">
                    Don’t have an account?
                    <a href="#" class="text-blue-600 hover:underline dark:text-blue-600">Create one</a>
                </div>
            </div>
        </div>
    </div>
</template>
