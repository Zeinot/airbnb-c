import * as simpleDatatables from "simple-datatables";


if (document.getElementById("filter-table") && typeof simpleDatatables.DataTable !== 'undefined') {
    const dataTable = new simpleDatatables.DataTable("#filter-table", {
        tableRender: (_data, table, type) => {
            if (type === "print") {
                return table
            }
            const tHead = table.childNodes[0]
            // console.log(`${tHead.childNodes[0].childNodes[0].childNodes[0].childNodes[0].data}`.includes(`Actions`) )
            // console.log(tHead.childNodes[0].childNodes[0].childNodes[0].childNodes[0].nodeName === "SPAN")
            const filterHeaders = {
                nodeName: "TR",
                attributes: {
                    class: "search-filtering-row"
                },
                childNodes: tHead.childNodes[0].childNodes.map(
                    (_th, index) => {
                        // console.log(_th.childNodes[0].childNodes[0].data !== "Actions")
                        if (tHead.childNodes[0].childNodes[0].childNodes[0].childNodes[0].nodeName !== "SPAN")
                        return {
                            nodeName: "TH",
                                childNodes
                        :
                            [
                                {
                                    nodeName: "INPUT",
                                    attributes: {
                                        class: "datatable-input",
                                        type: "search",
                                        "data-columns": "[" + index + "]"
                                    }
                                }
                            ]
                        }
                        else return {
                            nodeName: "TH",
                            childNodes
                                :
                                [
                                    {
                                        nodeName: "INPUT",
                                        attributes: {
                                            class: "hidden",
                                            type: "search",
                                            "data-columns": "[" + index + "]"
                                        }
                                    }
                                ]
                        }
                    }
                )
            }
            tHead.childNodes.push(filterHeaders)
            return table
        }
    });
}
