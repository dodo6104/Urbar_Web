import GSheetProcessor from "../google/gsheetsprocessor.js";

// test sheet id, Sheets API key, and valid auth scope
const demoSheetId = "1IinQGIciZSDeksaI-QYvPHVqctdKnqZIn-YDcxObBMk";
const apiKey = "AIzaSyDLKym7JLtw8pI7F-Gzb4b6foLYkmPyri4";
const options = {
  apiKey: apiKey,
  sheetId: demoSheetId,
  sheetNumber: 1,
  returnAllResults: true,
};

GSheetProcessor(
  options,  
  (results) => {
    window.oznamy = [];
    let processedResults = [];

    results.forEach((result, index) => {
      if (result.nazov && result.datum && result.text) {
        result.parsedDate = new Date(result.datum);
        processedResults.push(result);
      }
    });
    processedResults.sort((a, b) => b.parsedDate - a.parsedDate);

    window.oznamy = processedResults;
    let event = new Event("OznamyLoaded");
    document.dispatchEvent(event);
  },
  (error) => {
    console.log("error from sheets API", error);
  }
);