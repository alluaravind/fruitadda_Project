function arrayToJson(info) {
	var result_in_json=[];
	for(var i=0;i<3;i++)
	{
		result_in_json.push({"fname":info[i][0],"fquantity":info[i][1],"fprice":info[i][2]});
	}	
	result_in_json.push({"buyer_email":buyer_email,"seller_email":getSellersInformationFromServer[seller_index].semail});
	return JSON.stringify(result_in_json);
}