<script setup>
import { ref } from 'vue'
import Logo from '@/assets/images/BM-logo.png'
import { Head, Link } from '@inertiajs/vue3'
import InputField from '@/Components/InputField.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'

const username = ref('')
const password = ref('')
const showPassword = ref(false)
const loading = ref(false)

function toggleShow() {
    showPassword.value = !showPassword.value
}

async function submit() {
    if (!username.value || !password.value) {
        return alert('Please enter username and password')
    }

    loading.value = true
    try {
        const response = await fetch('/sign-in', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                username_or_email: username.value,
                password: password.value
            })
        });

        const data = await response.json();

        if(response.ok){
            
        }

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
            class="w-full max-w-4xl grid grid-cols-1 z-10 md:grid-cols-2 bg-white dark:bg-gray-800 rounded-2xl shadow-xl animate-fade-in-up overflow-hidden">
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
                        <a href="https://github.com/markymouseee/BM-MUSIC-VUE-LARAVEL" target="_blank"
                            class="hover:underline">
                            <li class="flex items-center gap-3 mb-2">
                                <span class="inline-flex items-center justify-center w-7 h-7 bg-white/20 rounded-full">

                                    <svg width="20" height="20" viewBox="0 0 20 20" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                        <title>github [#142]</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs>
                                        </defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Dribbble-Light-Preview"
                                                transform="translate(-140.000000, -7559.000000)" fill="currentColor">
                                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                                    <path
                                                        d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399"
                                                        id="github-[#142]">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                Github Repository
                            </li>
                        </a>

                        <a href="https://github.com/markymouseee" target="_blank" class="hover:underline">
                            <li class="flex items-center gap-3 mb-2">
                                <span class="inline-flex items-center justify-center w-7 h-7 bg-white/20 rounded-full">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5"
                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                            fill="currentColor" />
                                        <path
                                            d="M13.4881 6.44591C13.8882 6.55311 14.1256 6.96437 14.0184 7.36447L11.4302 17.0237C11.323 17.4238 10.9117 17.6613 10.5116 17.5541C10.1115 17.4468 9.8741 17.0356 9.98131 16.6355L12.5695 6.97624C12.6767 6.57614 13.088 6.3387 13.4881 6.44591Z"
                                            fill="currentColor" />
                                        <path
                                            d="M14.9697 8.46967C15.2626 8.17678 15.7374 8.17678 16.0303 8.46967L16.2387 8.67801C16.874 9.3133 17.4038 9.84308 17.7678 10.3202C18.1521 10.8238 18.4216 11.3559 18.4216 12C18.4216 12.6441 18.1521 13.1762 17.7678 13.6798C17.4038 14.1569 16.874 14.6867 16.2387 15.322L16.0303 15.5303C15.7374 15.8232 15.2626 15.8232 14.9697 15.5303C14.6768 15.2374 14.6768 14.7626 14.9697 14.4697L15.1412 14.2981C15.8229 13.6164 16.2797 13.1574 16.5753 12.7699C16.8577 12.3998 16.9216 12.1843 16.9216 12C16.9216 11.8157 16.8577 11.6002 16.5753 11.2301C16.2797 10.8426 15.8229 10.3836 15.1412 9.70191L14.9697 9.53033C14.6768 9.23744 14.6768 8.76257 14.9697 8.46967Z"
                                            fill="currentColor" />
                                        <path
                                            d="M7.96986 8.46967C8.26275 8.17678 8.73762 8.17678 9.03052 8.46967C9.32341 8.76257 9.32341 9.23744 9.03052 9.53033L8.85894 9.70191C8.17729 10.3836 7.72052 10.8426 7.42488 11.2301C7.14245 11.6002 7.07861 11.8157 7.07861 12C7.07861 12.1843 7.14245 12.3998 7.42488 12.7699C7.72052 13.1574 8.17729 13.6164 8.85894 14.2981L9.03052 14.4697C9.32341 14.7626 9.32341 15.2374 9.03052 15.5303C8.73762 15.8232 8.26275 15.8232 7.96986 15.5303L7.76151 15.322C7.12617 14.6867 6.59638 14.1569 6.23235 13.6798C5.84811 13.1762 5.57861 12.6441 5.57861 12C5.57861 11.3559 5.84811 10.8238 6.23235 10.3202C6.59638 9.84308 7.12617 9.31331 7.76151 8.67801L7.96986 8.46967Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                Developed by: Mark
                            </li>
                        </a>
                        <li class="flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-7 h-7 bg-white/20 rounded-full">
                                <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#1ED760" fill-rule="evenodd"
                                        d="M19.0983701,10.6382791 C15.230178,8.34118115 8.85003755,8.12986439 5.15729493,9.25058527 C4.56433588,9.43062856 3.93727638,9.09580812 3.75758647,8.50284907 C3.57789655,7.90953664 3.91236362,7.28283051 4.50585273,7.10261054 C8.74455585,5.81598127 15.7909802,6.06440214 20.2440037,8.70780512 C20.7774195,9.02442687 20.9525156,9.71332656 20.6362472,10.2456822 C20.3198021,10.779098 19.6305491,10.9549008 19.0983701,10.6382791 M18.971686,14.0407262 C18.7004726,14.4810283 18.1246521,14.6190203 17.6848801,14.3486903 C14.4600027,12.3664473 9.54264764,11.792217 5.72728477,12.9503953 C5.23256328,13.0998719 4.70992535,12.8208843 4.55974204,12.3270462 C4.41061884,11.8323247 4.68978312,11.3107469 5.18362118,11.1602103 C9.5419409,9.83771368 14.9600247,10.4782013 18.6638986,12.7544503 C19.1036707,13.0253103 19.242016,13.6013075 18.971686,14.0407262 M17.5034233,17.308185 C17.2876894,17.6617342 16.827245,17.7725165 16.4749326,17.5571359 C13.6571403,15.8347984 10.1101639,15.4459119 5.93312425,16.4000177 C5.53063298,16.4922479 5.12937851,16.2399399 5.03767834,15.8376253 C4.94544812,15.4351341 5.19669597,15.0338796 5.60024736,14.9420027 C10.1712973,13.8970803 14.0923186,14.3467468 17.2551791,16.2796943 C17.6078449,16.4948982 17.7189805,16.9556959 17.5034233,17.308185 M12,0 C5.37267547,0 0,5.37249879 0,11.9998233 C0,18.6278546 5.37267547,24 12,24 C18.6275012,24 24,18.6278546 24,11.9998233 C24,5.37249879 18.6275012,0 12,0" />
                                </svg>
                            </span>
                            Built with Spotify API
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
                       <PrimaryButton type="submit" :disabled="loading">
                            <span v-if="!loading">Sign in</span>
                            <span v-else>Signing in…</span>
                       </PrimaryButton>
                    </div>
                </form>

                <div
                    class="my-6 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-gray-300 after:mt-0.5 after:flex-1 after:border-t after:border-gray-300">
                    <p class="mx-4 mb-0 text-center font-semibold text-gray-500 dark:text-gray-300">or</p>
                </div>

                <SecondaryButton
                    type="button"
                   
                >
                    <svg class="me-1" width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#1ED760" fill-rule="evenodd"
                            d="M19.0983701,10.6382791 C15.230178,8.34118115 8.85003755,8.12986439 5.15729493,9.25058527 C4.56433588,9.43062856 3.93727638,9.09580812 3.75758647,8.50284907 C3.57789655,7.90953664 3.91236362,7.28283051 4.50585273,7.10261054 C8.74455585,5.81598127 15.7909802,6.06440214 20.2440037,8.70780512 C20.7774195,9.02442687 20.9525156,9.71332656 20.6362472,10.2456822 C20.3198021,10.779098 19.6305491,10.9549008 19.0983701,10.6382791 M18.971686,14.0407262 C18.7004726,14.4810283 18.1246521,14.6190203 17.6848801,14.3486903 C14.4600027,12.3664473 9.54264764,11.792217 5.72728477,12.9503953 C5.23256328,13.0998719 4.70992535,12.8208843 4.55974204,12.3270462 C4.41061884,11.8323247 4.68978312,11.3107469 5.18362118,11.1602103 C9.5419409,9.83771368 14.9600247,10.4782013 18.6638986,12.7544503 C19.1036707,13.0253103 19.242016,13.6013075 18.971686,14.0407262 M17.5034233,17.308185 C17.2876894,17.6617342 16.827245,17.7725165 16.4749326,17.5571359 C13.6571403,15.8347984 10.1101639,15.4459119 5.93312425,16.4000177 C5.53063298,16.4922479 5.12937851,16.2399399 5.03767834,15.8376253 C4.94544812,15.4351341 5.19669597,15.0338796 5.60024736,14.9420027 C10.1712973,13.8970803 14.0923186,14.3467468 17.2551791,16.2796943 C17.6078449,16.4948982 17.7189805,16.9556959 17.5034233,17.308185 M12,0 C5.37267547,0 0,5.37249879 0,11.9998233 C0,18.6278546 5.37267547,24 12,24 C18.6275012,24 24,18.6278546 24,11.9998233 C24,5.37249879 18.6275012,0 12,0" />
                    </svg>
                    Continue with Spotify
                </SecondaryButton>

                <div class="mt-6 text-center text-sm text-gray-500 dark:text-gray-400">
                    Don’t have an account?
                    <a href="#" class="text-blue-600 hover:underline dark:text-blue-600">Create one</a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
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
</style>