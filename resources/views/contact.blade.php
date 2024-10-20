<x-layout>
    <x-slot:title>{{ $title ?? 'Contact Us' }}</x-slot:title>

    <div class="max-w-3xl mx-auto py-8">
        <h3 class="text-2xl font-semibold mb-6 text-center">Contact Us</h3>

        <div class="p-6 bg-white border border-gray-300 rounded-lg shadow-md mb-6">
            <h4 class="text-xl font-medium text-gray-900 mb-4">Have a Question or Want to Contribute?</h4>
            <p class="text-gray-700 mb-4">
                If you have any questions regarding the blog, articles, or would like to join as a contributor, we are happy to help. Please fill out the form below, and our team will get back to you shortly.
            </p>

            <form action="/contact" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Your name" required>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Your email" required>
                </div>

                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" name="subject" id="subject" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Subject of your message" required>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" id="message" rows="5" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Write your message here..." required></textarea>
                </div>

                <div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-lg font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Send Message
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-6 text-center">
            <a href="/posts" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-lg font-semibold text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                Back to Blogs
            </a>
        </div>
    </div>
</x-layout>
