/*
 * LeetCode - Longest Substring Without Repeating Characters
 *
 * Problem Statement:
 * Given a string s, find the length of the longest substring without repeating characters.
 *
 * Example 1:
 * Input: s = "abcabcbb"
 * Output: 3  // "abc"
 *
 * Example 2:
 * Input: s = "bbbbb"
 * Output: 1  // "b"
 *
 * Example 3:
 * Input: s = "pwwkew"
 * Output: 3  // "wke"
 */

import java.util.HashSet;

public class LongestSubstring {

    /**
     * Returns the length of the longest substring without repeating characters.
     *
     * @param s Input string
     * @return Length of the longest substring without duplicates
     */
    public int lengthOfLongestSubstring(String s) {
        HashSet<Character> set = new HashSet<>();
        int left = 0, maxLen = 0;

        for (int right = 0; right < s.length(); right++) {
            char c = s.charAt(right);

            while (set.contains(c)) {
                set.remove(s.charAt(left));
                left++;
            }

            set.add(c);
            maxLen = Math.max(maxLen, right - left + 1);
        }

        return maxLen;
    }

    /**
     * Main method to test the solution with an example.
     */
    public static void main(String[] args) {
        LongestSubstring solution = new LongestSubstring();

        String input = "abcabcbb";
        int result = solution.lengthOfLongestSubstring(input);

        System.out.println("Input: " + input);
        System.out.println("Longest substring without repeating characters: " + result); // Output: 3
    }
}
