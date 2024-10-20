<x-layout>
  <x-slot:title>{{ $title ?? 'Home Page' }}</x-slot:title>

  <div class="max-w-4xl mx-auto py-8">
      <h3 class="text-2xl font-semibold mb-6 text-center">Welcome to Our Online Library</h3>

      <div class="p-6 bg-white border border-gray-300 rounded-lg shadow-md mb-6">
          <h4 class="text-xl font-medium text-gray-900 mb-4">Discover Thousands of Articles and Blogs</h4>
          <p class="text-gray-700">
              Our digital library offers a wide variety of articles, blogs, and engaging content on various topics, ranging from technology and health to literature. We are committed to providing high-quality content that you can access at any time.
          </p>
      </div>

      <div class="p-6 bg-white border border-gray-300 rounded-lg shadow-md mb-6">
          <h4 class="text-xl font-medium text-gray-900 mb-4">Start Exploring</h4>
          <p class="text-gray-700">
              Feel free to explore our blog by category or use the search feature to find the articles you're looking for. We also provide recommendations for popular and recent articles.
          </p>
      </div>

      <div class="mt-6">
          <a href="/blogs" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-lg font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
              Explore Blogs and Articles
          </a>
      </div>
  </div>
</x-layout>
