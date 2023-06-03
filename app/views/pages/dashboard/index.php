<?php $layout = new Elem('layout.auth') ?>
    <div class="space-y-2">
        <section class="bg-white rounded-lg p-4">
            <p class="text-2xl font-bold">Dashboard</p>
        </section>

        <section class="bg-white rounded-lg p-4">
            <div class="space-y-4">
                <p class="font-bold">Staff List Status</p>
                <table>
                    <tr class="header">
                        <th class="text-sm w-10"></th>
                        <th class="text-sm">Staff</th>
                        <th class="text-sm">Status</th>
                        <th class="text-sm w-20"></th>
                    </tr>
                    <tbody>
                        <tr class="row">
                            <td class="text-sm">1</td>
                            <td class="text-sm">
                                <p class="font-semibold">Jonathan Gambler</p>
                                <p class="text-zinc-500 text-xs">Software Engineer</p>
                            </td>
                            <td class="text-sm">On Leave until 9 June 2023</td>
                            <td class="text-sm text-right">
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
