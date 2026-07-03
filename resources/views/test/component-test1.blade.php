ComponentTest!
<x-test.app>
  <x-slot name="header">ComponentTest1</x-slot>

  <x-test.card title="title1" content="content1" :message="$message" />
  <x-test.card title="タイトル1" />
  <x-test.card title="タイトル1" class="bg-red-500" />
</x-test.app>