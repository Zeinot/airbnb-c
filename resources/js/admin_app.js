import * as simpleDatatables from "simple-datatables";

if (
    document.getElementById("filter-table") &&
    typeof simpleDatatables.DataTable !== "undefined"
) {
    const dataTable = new simpleDatatables.DataTable("#filter-table", {
        tableRender: (_data, table, type) => {
            if (type === "print") {
                return table;
            }
            const tHead = table.childNodes[0];
            const filterHeaders = {
                nodeName: "TR",
                attributes: {
                    class: "search-filtering-row",
                },
                childNodes: tHead.childNodes[0].childNodes.map((_th, index) => {
                    if (index === 0)
                        return {
                            nodeName: "TH",
                            childNodes: [
                                {
                                    nodeName: "INPUT",
                                    attributes: {
                                        class: "datatable-input hidden",
                                        type: "search",
                                        "data-columns": "[" + index + "]",
                                    },
                                },
                            ],
                        };
                    else
                        return {
                            nodeName: "TH",
                            childNodes: [
                                {
                                    nodeName: "INPUT",
                                    attributes: {
                                        class: "datatable-input w-full",
                                        type: "search",
                                        "data-columns": "[" + index + "]",
                                    },
                                },
                            ],
                        };
                }),
            };
            tHead.childNodes.push(filterHeaders);
            return table;
        },
    });
}
