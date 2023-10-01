<!-- component -->
<div class="p-6 dark:bg-gray-600 dark:bg-gradient-to-bl dark:from-gray-700/50 ">
  <div class="relative  sm:w-96 mx-auto text-center">
    <div class="mt-4 bg-white dark:bg-gray-500 shadow-md rounded-lg text-left">
      <div class="px-2 py-6 ">
        <form action="{{ route('drugs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="block font-semibold text-gray-900 dark:text-white"> Drug Name </label>
            <input type="text" placeholder="Drug Name" name="name" class="border dark:bg-gray-600  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
            <label class="block mt-3 font-semibold text-gray-600 dark:text-white"> Drug Description </label>
            <input type="text" placeholder="Description" name="description" class="border dark:bg-gray-600  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
            <label class="block font-semibold text-gray-600 dark:text-white"> Drug Price </label>
            <input type="number" placeholder="Price" name="price" class="border dark:bg-gray-600  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
            <label class="block font-semibold text-gray-600 dark:text-white"> Drug Quantity </label>
            <input type="number" placeholder="Quantity" name="quantity" class="border dark:bg-gray-600  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
            <label class="block font-semibold text-gray-600 dark:text-white"> Drug Image </label>
            <input type="file" name="image" class="dark:bg-gray-600 w-full h-12 px-3 py-2 mt-1 hover:outline-none">
            <label class="block font-semibold text-gray-600 dark:text-white"> Drug Category </label>
            <select name="category" id="category" class="border dark:bg-gray-600 w-full h-10 px-3 py-2 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                @foreach($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <input type="submit" name="add-drugs" value="Add Drugs" class="mt-4 bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-indigo-300" >
            
        </form>
      </div>
      
  </div>
</div> 