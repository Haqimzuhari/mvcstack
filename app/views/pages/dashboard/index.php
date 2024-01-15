<?php $layout = new Elem('layout.auth', ['page_name' => 'Dashboard']) ?>
    <div class="space-y-2">
        <section class="bg-white rounded-lg p-2">
            <div class="space-y-4 rounded-xl">
                <p class="font-bold">Staff List Status</p>
                <table class="w-full text-sm">
                    <tr class="header">
                        <td class="px-4 py-1 w-10"></td>
                        <td class="px-4 py-1">Staff</td>
                        <td class="px-4 py-1">Status</td>
                        <td class="px-4 py-1 w-20"></td>
                    </tr>
                    <tbody>
                        <tr class="hover:bg-slate-50 transition ">
                            <td class="px-4 py-1">1</td>
                            <td class="px-4 py-1">
                                <p class="font-semibold">Jonathan Gambler</p>
                                <p class="text-zinc-500 text-xs">Software Engineer</p>
                            </td>
                            <td class="px-4 py-1">On Leave until 9 June 2023</td>
                            <td class="px-4 py-1 text-right">
                                <div>
                                    <?php $trigger = new Elem('modal.trigger', ['id'=>'modal_example_1']) ?>
                                        <button type="button" class="link-secondary">More</button>
                                    <?php $trigger->close() ?>
                
                                    <?php $modal = new Elem('modal', ['id'=>'modal_example_1', 'title'=>'Modal Example']) ?>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A impedit omnis quas nam incidunt, pariatur id voluptate tenetur similique, libero consectetur esse exercitationem necessitatibus inventore laboriosam numquam fugit! Recusandae, minima!</p>
                                    <?php $modal->close() ?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
<?php $layout->close() ?>
