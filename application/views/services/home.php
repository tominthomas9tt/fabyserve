<main id="main">
    <section id="about" class="about bg-light">
        <div class="container mt-4">
            <div class="row pt-4">
                <div class="col">
                    <h4><a href="<?php echo $homeUrl; ?>"><i class="bi bi-arrow-left-circle-fill" style="font-size: 1.25rem;"></i></a>&nbsp;<?php echo empty($serviceSelected) ? "Services" : $serviceSelected; ?></h4>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-sm-3 border rounded">
                    <span class="p-2">
                        <h5>Select Sub-Category</h5>
                    </span>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="idall" name="customRadioInline" class="custom-control-input" <?php echo ($subCategorySelected == "all") ? "checked" : ""; ?>>
                                        <label class="custom-control-label" for="idall">All</label>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            if (!empty($subCategories)) {
                                foreach ($subCategories as $subCategory) {
                            ?>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="<?php echo "id" . $subCategory["id"]; ?>" name="customRadioInline" class="custom-control-input" onchange="applyFilterWithSubcategory('<?php echo $subCategory['name']; ?>')" <?php echo ($subCategorySelected == $subCategory['name']) ? "checked" : ""; ?>>
                                                <label class="custom-control-label" for="<?php echo "id" . $subCategory["id"]; ?>"><?php echo $subCategory["name"]; ?></label>
                                            </div>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-9">
                    <div class="row">

                        <?php
                        if (!empty($services)) {
                            foreach ($services as $vendor) {
                        ?>
                                <div class="col-sm-4 p-2">
                                    <div class="card text-center ">
                                        <div class="card-header bg-warning">
                                        <div class="rounded-circle">
                                        Featured

                                        </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $vendor['name']; ?></h5>

                                            <p><?php echo $vendor['location']; ?></p>
                                            <?php $this->load->view("shared/generals/ratingcards", $vendor); ?>
                                        </div>
                                        <div class="card-footer text-muted">
                                            <a href="#" class="btn btn-primary" style="background-color: #012970;">visit</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>