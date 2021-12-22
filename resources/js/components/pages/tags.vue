<template>
    <div>
        <div class="content">
            <div class="container">
                <!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
                <div
                    class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20"
                >
                    <p class="_title0">
                        Tags
                        <Button @click="addModal = true"
                            ><Icon type="md-add" />Add New Tag</Button
                        >
                    </p>

                    <div class="_overflow _table_div">
                        <table class="_table">
                            <!-- TABLE TITLE -->
                            <tr>
                                <th>ID</th>
                                <th>Tag Name</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            <!-- TABLE TITLE -->

                            <!-- ITEMS -->
                            <tr v-for="(tag,i) in tags" :key="i" v-if="tags.length">
                                <td>{{ tag.id }}</td>
                                <td class="_table_name">
                                    {{tag.tagName}}
                                </td>
                                <td>{{tag.created_at}}</td>
                                <td>
                                    <button
                                        class="_btn _action_btn edit_btn1"
                                        type="button"
                                    >
                                        Edit
                                    </button>
                                    <button
                                        class="_btn _action_btn make_btn1"
                                        type="button"
                                    >
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <!-- ITEMS -->
                        </table>
                    </div>
                </div>
                <!-- Tags adding modal -->
                <Modal
                    v-model="addModal"
                    title="Add Tag"
                    :mask-closable="false"
                    :closable="false"
                >
                    <Input
                        v-model="data.tagName"
                        placeholder="Add Tag Name"
                        style="width: 300px"
                    />
                    <div slot="footer">
                        <button type="default" @click="addModal = false">
                            Close
                        </button>
                        <button
                            type="primary"
                            @click="addTag"
                            :disabled="isAdding"
                            :loading="isAdding"
                        >
                            {{ isAdding ? "Adding" : "Add tag" }}
                        </button>
                    </div>
                </Modal>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            data: {
                tagName: "",
            },
            addModal: false,
            isAdding: false,
            tags: [],
        };
    },
    methods: {
        async addTag() {
            if (this.data.tagName.trim() == "")
                return this.error("tag name is required");
            const res = await this.callApi("post", "app/create_tag", this.data);
            if (res.status === 201) {
                this.tags.unshift(res.data);
                this.success("Tag has been added successfully");
                this.addModal = false;
                this.data.tagName = ''
            } else {
                this.somethingWentWrong();
            }
        },
    },

    async created() {
        const res = await this.callApi("get", "app/get_tags");
        if (res.status === 200) {
            this.tags = res.data;
        } else {
            this.somethingWentWrong();
        }
    },
};
</script>
