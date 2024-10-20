<x-layout>
    <x-slot:title>{{ $title ?? 'About Us' }}</x-slot:title>

    <div class="max-w-4xl mx-auto py-8">
        <h3 class="text-2xl font-semibold mb-6 text-center">About Us</h3>

        <div class="p-6 bg-white border border-gray-300 rounded-lg shadow-md mb-6">
            <h4 class="text-xl font-medium text-gray-900 mb-4">Who We Are</h4>
            <p class="text-gray-700">
                We are a passionate team dedicated to providing online literary resources to anyone eager to expand their knowledge. This website contains a collection of articles, blogs, and writings from various authors with diverse interests. Our mission is to provide a platform for those who want to share knowledge and for those who want to learn.
            </p>
        </div>

        <div class="p-6 bg-white border border-gray-300 rounded-lg shadow-md mb-6">
            <h4 class="text-xl font-medium text-gray-900 mb-4">Why We Exist</h4>
            <p class="text-gray-700">
                In the digital era, access to information is crucial. We believe that knowledge should be accessible to everyone without barriers. That's why we created this platform to enable anyone to read, learn, and share their writings with a wider community.
            </p>
        </div>

        <div class="p-6 bg-white border border-gray-300 rounded-lg shadow-md">
            <h4 class="text-xl font-medium text-gray-900 mb-4">Contact Us</h4>
            <p class="text-gray-700">
                If you have any questions or want to learn more about how you can contribute to our platform, don't hesitate to <a href="/contact" class="text-blue-600 hover:underline">contact us</a>.
            </p>
        </div>

        <div class="mt-6">
            <a href="/blogs" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-lg font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                View Blogs and Articles
            </a>
        </div>
    </div>
</x-layout>
