<?php $layout = new Elem('layout.auth') ?>
    <section>
        <div class="table-default">
            <div class="th-tr-group">
                <div class="tr">
                    <div class="th w-12">No</div>
                    <div class="th">Name</div>
                    <div class="th w-20">Team</div>
                    <div class="th w-20"></div>
                </div>
            </div>
            <div class="td-tr-group">
                <div class="tr">
                    <div class="td-no">1</div>
                    <div class="td">Stewie2k</div>
                    <div class="td md:w-20">Liquid</div>
                    <div class="td-action">
                        <button type="button" class="btn btn-primary px-4 py-2">More</button>
                    </div>
                </div>
                <div class="tr">
                    <div class="td-no">2</div>
                    <div class="td">S1mple</div>
                    <div class="td md:w-20">Navi</div>
                    <div class="td-action">
                        <button type="button" class="btn btn-primary px-4 py-2">More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-6">
        <?php $trigger = new Elem('modal.trigger', ['id'=>'modal-example']) ?>
            <button type="button" class="btn btn-secondary px-4 py-2">
                Open Modal
            </button>
        <?php $trigger->close() ?>

        <?php $modal = new Elem('modal', ['id'=>'modal-example', 'title'=>'Modal Example']) ?>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A impedit omnis quas nam incidunt, pariatur id voluptate tenetur similique, libero consectetur esse exercitationem necessitatibus inventore laboriosam numquam fugit! Recusandae, minima!</p>
        <?php $modal->close() ?>
    </section>
<?php $layout->close() ?>
